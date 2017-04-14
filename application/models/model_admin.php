<?php
/**
* 
*/
class Model_admin extends CI_Model{
	
	function tampil_data_front($limit,$offset){
		$this->db->order_by('id','desc');
		$this->db->where('id_kat',4);
		$data = $this->db->get('data',$limit,$offset);
		return $data->result();
	}
	
	function tampil_data($limit,$offset){
		$this->db->select('*');
		$this->db->from('data');
		$this->db->join('kat_data', 'kat_data.id_kat = data.id_kat');
		$this->db->order_by('data.id','desc');
		$data = $this->db->get($limit,$offset);
		return $data->result();
	}
	
	function get_messages(){
		$this->db->order_by('id', 'desc');
		return $this->db->get('kontak')->result();
	}
	
	
	function update_messages($id, $dt){
		$this->db->where('id', $id);
		return $this->db->update('kontak', $dt);
	}
	
	function delete_messages($id){
		$this->db->where('id', $id);
		return $this->db->delete('kontak');
	}
	
	function read_messages($id){
		$this->db->where('id', $id);
		return $this->db->get('kontak')->row();
	}

	function input_data($data){
		$tambah = $this->db->insert('data',$data);
		return $tambah;
	}
	
	function kat_data(){
		$this->db->order_by('id_kat','desc');
		return $this->db->get('kat_data')->result();
	}

	function insert_kategori($data){
		return $this->db->insert('kat_data',$data);
	}
	
	function edit_kategori($data,$id){
		$this->db->where('id_kat',$id);
		return $this->db->update('kat_data',$data);
	}
	
	function hapus_kategori($id){
		$this->db->where('id_kat',$id);
		return $this->db->delete('kat_data');
	}
		
	function edit_berita($data,$id){
		$this->db->where('id',$id);
		$update = $this->db->update('berita',$data);
		return $update;
	}

	function hapus_data($id){
		$this->db->where('id',$id);
		return $this->db->delete('data');
	}


	function input_berita($data){
		$tambah = $this->db->insert('berita',$data);
		return $tambah;
	}
	function tampil_berita($limit,$offset){
		$this->db->order_by('id','desc'); 
		$this->db->where('status','berita');
		$data = $this->db->get('berita',$limit,$offset);
		return $data->result();
	}
	function hapus_berita($id){
		$this->db->where('id',$id);
		return $this->db->delete('berita');
	}

	function login_admin($u,$p){
		$user = mysql_real_escape_string($u);
		$pass = mysql_real_escape_string($p);
		$cek_login = $this->db->get_where('admin_login',array('username'=>$user, 'password'=>$pass));
		if(count($cek_login->result()) > 0){
			foreach($cek_login->result() as $ck ){
					$data['logged_in'] = 'yes';
					$data['user'] = $ck->username;
					$data['ses_kcfinder']['disabled'] = false;
	          		$data['ses_kcfinder']['uploadURL'] = "../content_upload";
					$this->session->set_userdata($data);
				}
			redirect('admin');
		}else{
			$data['title'] = "SALAH GAN";
			$this->load->view('admin/bg_login',$data);
		}
	}

	function matakuliah(){
		$this->db->order_by('semester','asc');
		return $this->db->get('mata_kuliah')->result();
	}
	
	function insert_matakuliah($data){
		return $this->db->insert('mata_kuliah',$data);
	}

	function update_matakuliah($data,$id){
		$this->db->where('id_mk',$id);
		return $this->db->update('mata_kuliah',$data);
	}

	function delete_matakuliah($id){
		$this->db->where('id_mk',$id);
		return $this->db->delete('mata_kuliah');
	}	

	function galery($limit,$offset){
		$this->db->order_by('id','desc');
		return $this->db->get('galery',$limit,$offset)->result();
	}

	function insert_galery($data){
		return $this->db->insert('galery',$data);
	}

	function hapus_galery($id){
		$this->db->where('id',$id);
		return $this->db->delete('galery');
	}

	function poling($data){
		return $this->db->insert('poling',$data);
	}
	
	function get_pegawai_dos(){
		$this->db->where('jenis_pegawai','dosen');
		$this->db->order_by('id_peg','asc');
		return $this->db->get('pegawai')->result();
	}
	
	function get_pegawai_kar(){
		$this->db->where('jenis_pegawai','karyawan');
		$this->db->order_by('id_peg','asc');
		return $this->db->get('pegawai')->result();
	}
	
	function insert_pegawai($data){
		return $this->db->insert('pegawai',$data);
	}
	
	function edit_pegawai($data,$id){
		$this->db->where('id_peg',$id);
		return $this->db->update('pegawai',$data);
	}
	
	function hapus_pegawai($id){
		$this->db->where('id_peg',$id);
		return $this->db->delete('pegawai');
	}
	
	function profil(){
		$this->db->where('status','profil');
		return $this->db->get('berita')->result();
	}
	
	function kalender(){
		$this->db->order_by('id','desc');
		$this->db->where('status','kalender');
		return $this->db->get('berita')->row();
	}
	
	function kurikulum($id){
		return $this->db->get_where('mata_kuliah', array('semester' => $id))->result();
	}
	
	function input_kontak($data){
		return $this->db->insert('kontak',$data);
	}
	
}
?>