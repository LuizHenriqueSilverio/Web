<?php defined('BASEPATH') or exit('No direct script access allowed');
	class Pdf extends CI_Controller{
		function gerar_pdf() {
			$data['bandas'] = $this->db->get('bandas')->result();
			$this->load->view('pdfgerado',$data);
		}
	}	
