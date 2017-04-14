<?php
	/**
	*  
	*/
	class Welcome{
		protected $_ci;

		function __construct(){
			$this->_ci = &get_instance();
		}

		function display($welcome,$data = null){
			$data['_content'] = $this->_ci->load->view('front/'.$welcome,$data,true);
			$data['_header'] = $this->_ci->load->view('front/template/header',$data,true);
			$data['_slider'] = $this->_ci->load->view('front/template/slider',$data,true);
			$data['_sidebar'] = $this->_ci->load->view('front/template/sidebar',$data,true);
			$data['_footer'] = $this->_ci->load->view('front/template/footer',$data,true);
			
			$this->_ci->load->view('front/template/welcome.php',$data);
		}
	}
?>