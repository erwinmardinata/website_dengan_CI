<?php
	/**
	*  
	*/
	class Template{
		protected $_ci;

		function __construct(){
			$this->_ci = &get_instance();
		}

		function display($template, $data = null){
			$data['_content'] = $this->_ci->load->view('admin/'.$template,$data,true);
			$data['_header'] = $this->_ci->load->view('admin/template/header',$data,true);
			$data['_sidebar'] = $this->_ci->load->view('admin/template/sidebar',$data,true);
			$data['_footer'] = $this->_ci->load->view('admin/template/footer',$data,true);
			$this->_ci->load->view('admin/template/template.php',$data);
		}
	}
?>