<?php
/**
* 
*/
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
		session_start();
	}	

	function index(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['admin'] = $this->session->userdata('user');
			$this->template->display('dashboard',$data);
		}
	}

	function login_admin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->model_admin->login_admin($user,$pass);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
	
	function messages(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['kontak'] = $this->model_admin->get_messages();
			$this->template->display('pesan',$data);
		}
	}
	
	function read_messages($id){
		$dt = array(
			'status' => 0
		);
		$this->model_admin->update_messages($id, $dt);
		$data['messages'] = $this->model_admin->read_messages($id);
		$this->template->display('read_messages', $data);
	}
	
	function delete_messages($id){
		$this->model_admin->delete_messages($id);
		redirect('admin/messages');
	}
	
	function reply_messages(){
		$id = $this->input->post('id');
		$to = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		$subject = "Terima Kasih Bro...";
		$header = "From: <537.mardinata@gmail.com>";
		
		$send = mail($to, $subject, $pesan, $header);
		
		if($send){
			redirect('admin/read_messages/'.$id.'/sukses');
		}else{
			redirect('admin/read_messages/'.$id.'/gagal');
		}
	}

	function berita(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['sukses'] = "";
			$data['error'] = "";
			$data['query'] = $this->model_admin->tampil_berita(null,null);
			$this->template->display('berita',$data);
		}
	}

	function proses_input_berita(){
		$images = $_FILES['images']['name'];

		$config['file_name'] = $images;
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['max_size'] = '10000000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';

		$aksi = $this->input->post('aksi');
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->upload->initialize($config);
		
		$jdl = explode(" ", $this->input->post('judul'));
		$jdl_seo = strtolower(implode("-", $jdl));
		
		if(!empty($images)){
			if(!$this->upload->do_upload('images')){
				if($aksi == "tambah"){
					$data['title'] = "Tambahkan Berita Baru";
					$data['id'] = "";
					$data['aksi'] = "tambah";
				}else if($aksi == "edit"){
					$data['title'] = "Edit Berita";
					$data['id'] = $id;
					$data['aksi'] = "edit";
				}
					$data['error'] = $this->upload->display_errors();
					$data['judul'] = $this->input->post('judul');
					$data['deskripsi'] = $this->input->post('deskripsi');
					$data['berita'] =  $this->input->post('berita');
					$data['disable'] =  $this->input->post('disable');
					$data['status'] =  $status;
					$this->template->display('input_berita',$data);
			}else{
					$data['sukses'] = $this->upload->data();
					$get_name = $this->upload->data();
					$images = $get_name['file_name'];
					
					$data = array(
						'judul' => $this->input->post('judul'),
						'berita' => $this->input->post('berita'),
						'tgl_post' => date('y'.'-'.'m'.'-'.'d'),
						'author' => $this->session->userdata('user'),
						'images' => $images,
						'deskripsi' => $this->input->post('deskripsi'),
						'status' => $status,
						'judul_seo' => $jdl_seo
						 );
				if($aksi == "tambah"){
					$this->model_admin->input_berita($data);
					if($status == "kalender" || $status == "profil"){
						redirect('admin/prodi');
					}else{
						redirect('admin/berita');
					}
				}else if($aksi == "edit"){
					$cek = $this->db->get_where('berita',array('id'=>$id))->row();
					$path ='assets/images/';
						unlink($path.$cek->images);
					$this->model_admin->edit_berita($data,$id);
					if($status == "kalender" || $status == "profil"){
						redirect('admin/prodi');
					}else{
						redirect('admin/berita');
					}
				}
			}
		}else{
			$data = array(
						'judul' => $this->input->post('judul'),
						'berita' => $this->input->post('berita'),
						'tgl_post' => date('y'.'-'.'m'.'-'.'d'),
						'author' => $this->session->userdata('user'),
						'deskripsi' => $this->input->post('deskripsi'),
						'status' => $status,
						'judul_seo' => $jdl_seo
						 );
				if($aksi == "tambah"){
					$this->model_admin->input_berita($data);
					if($status == "kalender" || $status == "profil"){
						redirect('admin/prodi');
					}else{
						redirect('admin/berita');
					}
				}else if($aksi == "edit"){
					$this->model_admin->edit_berita($data,$id);
					if($status == "kalender" || $status == "profil"){
						redirect('admin/prodi');
					}else{
						redirect('admin/berita');
					}
				}
		}
			
	}

	function tberita(){
		$data['disable'] = "";
		$data['error'] = "";
		$data['title'] = "Tambahkan Berita Baru";
		$data['judul'] = "";
		$data['deskripsi'] = "";
		$data['berita'] = "";
		$data['status'] = "berita";
		$data['id'] = "";
		$data['aksi'] = "tambah";
		$this->template->display('input_berita',$data);
	}

	function eberita($id){
		$dt = $this->db->get_where('berita',array('id'=>$id))->row();
		$data['disable'] = "";
		$data['error'] = "";
		$data['title'] = "Edit Berita";
		$data['judul'] = $dt->judul;
		$data['deskripsi'] = $dt->deskripsi;
		$data['berita'] = $dt->berita;
		$data['status'] = "berita";
		$data['id'] = $id;
		$data['aksi'] = "edit";
		$this->template->display('input_berita',$data);
	}		

	function hapus_berita($id){
		$cek = mysql_query("select * from berita where id = $id");
        $path ='assets/images/';
		$det = mysql_fetch_array($cek);
			unlink($path.$det['images']);
		$this->model_admin->hapus_berita($id);
		if($det[status] != "berita"){
			redirect('admin/prodi');
		}else{
			redirect('admin/berita');
		}
	}

	function data_file(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['error'] = ""; 
			$data['sukses'] = ""; 
			$data['query'] = $this->model_admin->tampil_data(null,null);
			$this->template->display('data',$data);
			}
	}
	
	function tfile(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['error'] = "";
			$data['kat'] = $this->db->query('select * from kat_data')->result();
			$this->template->display('input_file',$data);
		}
	}

	function input_data(){	
		$nama_file = $_FILES['file']['name'];

		$config['file_name'] = $nama_file;
		$config['upload_path'] = './assets/file/';
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip|rar';
		$config['max_size'] = '10000000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$this->upload->initialize($config);

		if(!$this->upload->do_upload('file')){
			$data['kat'] = $this->db->query('select * from kat_data')->result();
			$data['error'] = $this->upload->display_errors();
			$this->template->display('input_file',$data);
		}else{
			$pesan['sukses'] = $this->upload->data();
			$get_name = $this->upload->data();
			$nm_file = $get_name['file_name'];
			$data['sukses'] = "Sukses";
			$data['error'] = "";
			$data = array(
			'judul'=> $this->input->post('judul'),
			'tgl_upload'=> date('y'.'-'.'m'.'-'.'d'),
			'id_kat'=> $this->input->post('kategori'),
			'title_file'=> $nm_file
			);
			$this->model_admin->input_data($data);
			redirect('admin/data_file/sukses');
		}
	}

	function hapus_data($id){
		$cek = $this->db->get_where('data',array('id'=>$id))->row();
        $path ='assets/file/';
			unlink($path.$cek->title_file);
		$this->model_admin->hapus_data($id);
		redirect('admin/data_file');
	}
	
	//crud kategori
	function kategori(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			redirect('admin/login');
		}else{
			$data['sukses'] = "";
			$data['query'] = $this->model_admin->kat_data();
			$this->template->display('kategori',$data);
		}
	}
	
	function tkategori(){
		$data['title'] = "Tambah Kategori";
		$data['id'] = "";
		$data['aksi'] = "tambah";
		$data['kategori'] = "";
		$this->load->view('admin/input_kategori',$data);
	}
	
	function ekategori(){
		$id = $this->input->post('id');
		$cek = $this->db->get_where('kat_data',array('id_kat' => $id))->row();
		$data['title'] = "Edit Kategori";
		$data['id'] = $cek->id_kat;
		$data['kategori'] = $cek->kategori;
		$data['aksi'] = "edit";
		$this->load->view('admin/input_kategori',$data);
	}
	
	function proses_input_kat(){
		$aksi = $this->input->post('aksi');
		$id = $this->input->post('id');
		$this->form_validation->set_rules('kategori','Kategori','trim|required');
		if($this->form_validation->run() == FALSE){
			if($aksi == "tambah"){
				$data['id'] = "";
				$data['aksi'] = $aksi;
			}else if($aksi == "edit"){
				$data['id'] = $id;
				$data['aksi'] = $aksi;
			}
			redirect('admin/kategori/gagal');
		}else{
			$data = array(
				'kategori' => $this->input->post('kategori')
			);
			if($aksi == "tambah"){
				$this->model_admin->insert_kategori($data);
			}else if($aksi == "edit"){
				$this->model_admin->edit_kategori($data,$id);
			}
			redirect('admin/kategori/sukses');
		}
	}
	
	function hkategori($id){
		$this->model_admin->hapus_kategori($id);
		redirect('admin/kategori');
	}

	function pegawai(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['dosen'] = $this->model_admin->get_pegawai_dos();
			$data['karyawan'] = $this->model_admin->get_pegawai_kar();
			$this->template->display('pegawai',$data);	
		}
	}
	
	function tpegawai(){
		$data['nama'] = "";
		$data['nip'] = "";	
		$data['tmp_lahir'] = "";	
		$data['tgl_lahir'] = "";	
		$data['alamat'] = "";	
		$data['id'] = "";	
		$data['error'] = "";	
		$data['aksi'] = "tambah";
		$data['title'] = "Input Pegawai";
		$this->template->display('input_pegawai',$data);
	}
	
	function epegawai($id){
		$cek = $this->db->get_where('pegawai',array('id_peg'=>$id))->row();
		$data['nama'] = $cek->nama;
		$data['nip'] = $cek->nip;	
		$data['tmp_lahir'] = $cek->tempat_lahir;	
		$data['tgl_lahir'] = $cek->tgl_lahir;	
		$data['alamat'] = $cek->alamat;	
		$data['id'] = $id;	
		$data['error'] = "";	
		$data['aksi'] = "edit";
		$data['title'] = "Edit Pegawai";
		$this->template->display('input_pegawai',$data);
	}
	
	function input_pegawai(){
		$config['file_name'] = $_FILES['photo']['name'];
		$config['upload_path'] = './assets/images/photo/';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['max_size'] = '10000000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		
		$this->upload->initialize($config);
		
		$aksi = $this->input->post('aksi');
		$id = $this->input->post('id');
		//jika ada image yang di upload
		if(!empty($_FILES['photo']['name'])){
			if(!$this->upload->do_upload('photo')){
				if($aksi == "tambah"){
					$data['title'] = "Input Pegawai";
				}else if($aksi == "edit"){
					$data['title'] = "Edit Pegawai";
				}
				$data['error'] = $this->upload->display_errors();
				$data['nama'] = $this->input->post('nama');
				$data['nip'] = 	$this->input->post('nip');
				$data['tmp_lahir'] = $this->input->post('tmp_lahir');
				$data['tgl_lahir'] = $this->input->post('tgl_lahir');
				$data['alamat'] = $this->input->post('alamat');
				$data['id'] = $id;	
				$data['aksi'] = $this->input->post('aksi');
				$this->template->display('input_pegawai',$data);
			}else{
				$get_name = $this->upload->data();
				$nm_photo = $get_name['file_name'];
				$data = array(
					'nama' => $this->input->post('nama'),
					'nip' => $this->input->post('nip'),
					'tempat_lahir' => $this->input->post('tmp_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jenis_kelamin' => $this->input->post('jk'),
					'alamat' => $this->input->post('alamat'),
					'jenis_pegawai' => $this->input->post('jenis_peg'),
					'photo' => $nm_photo
			);
			if($aksi == "tambah"){
				$this->model_admin->insert_pegawai($data);
			}else if($aksi == "edit"){
				$cek = $this->db->get_where('pegawai',array('id_peg'=>$id))->row();
				if($nm_photo == $cek->photo){
				}else{
					$path ='assets/images/photo/';
					unlink($path.$cek->photo);
				}
				$this->model_admin->edit_pegawai($data,$id);
			}
		redirect('admin/pegawai/sukses');
			}
		}else{
			//jika tidak ada photo
			$data = array(
				'nama' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'tempat_lahir' => $this->input->post('tmp_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'jenis_pegawai' => $this->input->post('jenis_peg')
			);
			if($aksi == "tambah"){
				$this->model_admin->insert_pegawai($data);
			}else if($aksi == "edit"){
				$this->model_admin->edit_pegawai($data,$id);
			}
		redirect('admin/pegawai/sukses');
		}
	}
	
	function hpegawai($id){
		$cek = $this->db->get_where('pegawai',array('id_peg'=>$id))->row();
		$path ='assets/images/photo/';
			unlink($path.$cek->photo);
		$this->model_admin->hapus_pegawai($id);
		redirect('admin/pegawai/sukses');
	}

	function prodi(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['error'] = ""; 
			$data['sukses'] = ""; 
			$data['profil'] = mysql_query("select * from berita where status = 'profil'");
			$data['kalender'] = mysql_query("select * from berita where status = 'kalender' order by id desc");
 			$data['mk'] = $this->model_admin->matakuliah();
			$this->template->display('prodi',$data);	
		}
	}

	function tkalender_akademik(){
		$data['disable'] = "disabled";
		$data['error'] = "";
		$data['title'] = "Tambahkan Kalender Baru";
		$data['judul'] = "";
		$data['deskripsi'] = "-";
		$data['berita'] = "-";
		$data['status'] = "kalender";
		$data['id'] = "";
		$data['aksi'] = "tambah";
		$this->template->display('input_berita',$data);
	}

	function tprofil($status){
		$cek = $this->db->get_where('berita',array('status'=>$status))->result();
		if( $cek == null){
			$data['title'] = "Tambah Profil Prodi";
			$data['aksi'] = "tambah";
			$data['id'] = "";
			$data['judul'] = "";
			$data['berita'] = "";
			$data['deskripsi'] = "";
		}else{
			foreach ( $cek as $row ):
			$data['title'] = "Edit Profil Prodi";
			$data['aksi'] = "edit";
			$data['id'] = $row->id;
			$data['judul'] = $row->judul;
			$data['berita'] =  $row->berita;
			$data['deskripsi'] =  $row->deskripsi;
			endforeach;
		}
		$data['disable'] = "";
		$data['error'] = "";
		$data['status'] = $status;
		$this->template->display('input_berita',$data);
	}

	function matakuliah(){
		$id = $this->input->post('id');
		$aksi = $this->input->post('aksi');
		$data = array(
			'kode_mk' => $this->input->post('kdmk'),
			'nama_mk' => $this->input->post('nmmk'),
			'jml_sks' => $this->input->post('sks'),
			'semester' => $this->input->post('semester'),
			'prasyarat' => $this->input->post('prasyarat'),
			'id_peg' => $this->input->post('dosen')
			);
		if($aksi == 'tambah'){
			$query = $this->model_admin->insert_matakuliah($data);
			if($query == false){
				echo "gagal";
			}else{
				redirect('admin/prodi');
			}
			
		}else if($aksi == "edit"){
			$this->model_admin->update_matakuliah($data,$id);
			redirect('admin/prodi');
		}
	}

	function input_matakuliah(){
		$data['id'] = "";
		$data['error'] = "";
		$data['aksi'] = "tambah";
		$data['title'] = "Tambah Mata Kuliah";
		$data['kdmk'] = "";
		$data['nmmk'] = "";
		$data['sks'] = "";
		$data['semester'] = "";
		$data['prasyarat'] = "";
		$data['dosen'] = $this->model_admin->get_pegawai_dos();
		$this->template->display('matakuliah',$data);
	}

	function edit_matakuliah($id){
		$cek = $this->db->get_where('mata_kuliah',array('id_mk'=>$id))->row();
		$data['id'] = $id;
		$data['error'] = "";
		$data['aksi'] = "edit";
		$data['title'] = "Edit Mata Kuliah";
		$data['kdmk'] = $cek->kode_mk;
		$data['nmmk'] = $cek->nama_mk;
		$data['sks'] = $cek->jml_sks;
		$data['semester'] = $cek->semester;
		$data['prasyarat'] = $cek->prasyarat;
		$data['dosen'] = $this->model_admin->get_pegawai_dos();
		$this->template->display('matakuliah',$data);
	}

	function hapus_matakuliah($id){
		$this->model_admin->delete_matakuliah($id);
		redirect('admin/prodi');
	}

	function galery(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data["sukses"] = "";
			$data['query'] = $this->model_admin->galery(null,null);
			$this->template->display('galery',$data);
		}
	}

	function input_galery(){
		$cek = $this->session->userdata('logged_in');
		if (empty($cek)){
			$data['title'] = "LOGIN DULU BRO";
			$this->load->view('admin/bg_login',$data);
		}else{
			$data['error'] = "";
			$this->template->display('input_galery',$data);
		}
	}

	function insert_galery(){
		$images = $_FILES['photo']['name'];

		$config['file_name'] = $images;
		$config['upload_path'] = './assets/galery/';
		$config['allowed_types'] = 'JPG|jpg|jpeg|gif|png';
		$config['max_size'] = '1000000mb';
		$config['max_width'] = '50000';
		$config['max_height'] = '50000';

		$this->upload->initialize($config);

		if(!$this->upload->do_upload('photo')){
			$data['error'] = $this->upload->display_errors();
			$this->template->display('input_galery',$data);
		}else{
			$get_name = $this->upload->data();
			$images = $get_name['file_name'];
			$data = array(
				'photo' => $images,
				'deskripsi' => $this->input->post('desk'),
				'tgl' => date('y'.'-'.'m'.'-'.'d')
				);
			$this->model_admin->insert_galery($data);
			redirect('admin/galery');
		}
	}

	function hapus_galery($id){
		$cek = $this->db->get_where('galery',array('id'=>$id))->row();
        $path ='assets/galery/';
			unlink($path.$cek->photo);
		$this->model_admin->hapus_galery($id);
		redirect('admin/galery');
	}
}
?>