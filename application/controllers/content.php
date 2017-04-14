<?php
/**
* 
*/
class Content extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}

	function index(){
		$data['s_berita'] = $this->model_admin->tampil_berita('5','0');
		$data['s_data'] = $this->model_admin->tampil_data_front('5','0');
		$data['slider'] = $this->model_admin->galery('5','0');
		$this->welcome->display('tentang_ti',$data);
	}

	function read($judul){
		$data['berita'] = $this->db->get_where('berita',array('judul_seo'=>$judul))->result();
		$this->template_front->display('content',$data);
	}

	function berita($num = null){
			$config['base_url'] = base_url().'index.php/content/berita/';
			$config['total_rows'] = $this->db->count_all('berita');
			$config['per_page'] = '5';
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#"><span class="sr-only">(current)</span>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_link']='<span class="glyphicon glyphicon-fast-backward"></span>';
			$config['last_link']='<span class="glyphicon glyphicon-fast-forward"></span>';
			$config['next_link']='<span class="glyphicon glyphicon-step-forward"></span>';
			$config['prev_link']='<span class="glyphicon glyphicon-step-backward"></span>';	

			$this->pagination->initialize($config);
			$data['sukses'] = ""; 
			$data['halaman'] = $this->pagination->create_links();
			$data['query'] = $this->model_admin->tampil_berita($config['per_page'],$num);
			$this->template_front->display('berita',$data);
	}

	function profil(){
		$data['profil'] = $this->model_admin->profil();
		$this->template_front->display('profil',$data);	
	}

	function kalender(){
		$data['kalender'] = $this->model_admin->kalender();
		$this->template_front->display('kalender',$data);	
	}
	
	function kurikulum(){
		$this->template_front->display('kurikulum');	
	}
	
	function get_pegawai(){
		$data['dosen'] = $this->model_admin->get_pegawai_dos();
		$data['karyawan'] = $this->model_admin->get_pegawai_kar();
		$this->template_front->display('pegawai',$data);	
	}
	
	function detail_pegawai($id){
		$data['cek'] = $this->db->get_where('pegawai',array('id_peg'=> $id))->row();
		$data['mk'] = $this->db->get_where('mata_kuliah',array('id_peg'=> $id))->result();
		$this->template_front->display('detail_pegawai',$data);
	}
	
	function unduh(){
		$data['unduh'] = $this->model_admin->kat_data();
		$this->template_front->display('unduh',$data);
	}
	
	function magang(){
		$this->template_front->display('magang');
	}
	
	function get_kontak(){
		$this->template_front->display('kontak');
	}
	
	function input_kontak(){
		date_default_timezone_set('Asia/Makassar');
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan' => nl2br($this->input->post('pesan')),
			'tanggal' => date('Y-m-d'),
			'jam' => date('g:i A')
		);
		$this->model_admin->input_kontak($data);
		redirect('content/get_kontak');
	}

	function poling(){
		$data['a'] = $this->db->query("select count(value) as a from poling where value='a'")->row();
		$data['b'] = $this->db->query("select count(value) as b from poling where value='b'")->row();
		$data['c'] = $this->db->query("select count(value) as c from poling where value='c'")->row();
		$data['d'] = $this->db->query("select count(value) as d from poling where value='d'")->row();
		$data['e'] = $this->db->query("select count(value) as e from poling where value='e'")->row();
		$this->template_front->display('poling',$data);
	}

	function insert_poling(){
		$data = array(
			'value' => $this->input->post('rd')
			);
		$this->model_admin->poling($data);
	}

	function galery($num = null){
		$config['base_url'] = base_url().'index.php/content/galery/';
		$config['total_rows'] = $this->db->count_all('galery');
		$config['per_page'] = '6';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#"><span class="sr-only">(current)</span>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link']='<span class="glyphicon glyphicon-fast-backward"></span>';
		$config['last_link']='<span class="glyphicon glyphicon-fast-forward"></span>';
		$config['next_link']='<span class="glyphicon glyphicon-step-forward"></span>';
		$config['prev_link']='<span class="glyphicon glyphicon-step-backward"></span>';	

		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['query'] = $this->model_admin->galery($config['per_page'],$num);
		$this->template_front->display('galery',$data);
	}
}
?>