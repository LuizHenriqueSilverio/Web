<?php
class Banco extends CI_Model {
    public function index() {
        $data = $this->input->post('data');
        $cabum = explode("/", $data); 
		$dados['Nome'] = $this->input->post('nome_banda');
		$dados['Data_Fundacao'] = (cabum[2] . "-" . cabum[1] . "-" . cabum[0]);
 		$dados['Quant_Integrantes'] = $this->input->post('integrantes');
        if($this->db->insert('dados', $dados)){
			redirect(base_url('administracao'));
		}else{
			echo "Nao foi possivel adicionar a banda";
		}
	}
}
?>
