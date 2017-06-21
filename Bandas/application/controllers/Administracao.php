<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('logado')){
			redirect("welcome");
		}
	}
	public function index() {
		$this->load->view("home");
	}
	
	public function cadastrar() {
		$this->load->view("cadastrar");
	}

    public function consultar() {
        $data['bandas'] = $this->db->get('bandas')->result();
        $this->load->view('consultar', $data);
    }

    public function gerenciar() {
        $data['bandas'] = $this->db->get('bandas')->result();
        $this->load->view('gerenciar', $data);
    }

    public function alterar($id) {
        $this->db->where('id',$id);
        $data['bandas'] = $this->db->get('bandas')->result();
        $this->load->view('alterar', $data);
    }
}
