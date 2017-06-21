<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Fazer_login extends CI_Controller {
     public function login() {
		$this->load->library('session');
		$usuario = $this->input->post('txt_usuario');
		$senha = $this->input->post('txt_senha');
		if ($usuario == "admin" && $senha == "12345") {
			$array = array("logado"=>TRUE);
			$this->session->set_userdata($array);
			redirect("administracao");
		} else {
			$this->session->sess_destroy();	
			redirect("welcome");
		}
    }
    
    public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect("welcome");
	}
}
