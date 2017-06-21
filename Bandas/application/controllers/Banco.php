<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Banco extends CI_Controller {

    public function inserir() {
        $data = $this->input->post('data');
        $num = $this->input->post('integrantes');
        $nome = $this->input->post('banda');
        $explodir = explode("/", $data);
        if ($data != "" && $num != "" && $nome != "") { 
		    $dados['nome'] = $nome;
		    $dados['data_fundacao'] = $explodir[2]. "-" .$explodir[1]. "-" .$explodir[0];
 		    $dados['quant_integrantes'] = $num;
            if($this->db->insert('bandas', $dados)){
		    	redirect(base_url('administracao'));
		    }else{
		    	echo "Nao foi possível adicionar a banda!";
		    }
        }else {
		    echo "Preencha todos os campos para poder inserir a banda!";
        }
	}

    public function alterar() {
        $data = $this->input->post('data');
        $num = $this->input->post('integrantes');
        $nome = $this->input->post('banda');
        $explodir = explode("/", $data);
        if ($data != "" and $num != "" and $nome != "") { 
		    $dados['nome'] = $nome;
		    $dados['data_fundacao'] = $explodir[2]. "-" .$explodir[1]. "-" .$explodir[0];
 		    $dados['quant_integrantes'] = $num;
            $this->db->where('ID',$this->input->post('id'));
            if($this->db->update('bandas', $dados)){
		    	redirect(base_url('administracao'));
		    }else{
		    	echo "Nao foi possível alterar a banda!";
		    }
        }else {
		    echo "Preencha todos os campos para poder inserir a banda!";
        }
	}

    public function excluir($id) {
        $this->db->where('id', $id);
        if ($this->db->delete('bandas')) {
		redirect(base_url('administracao'));
        }else {
            echo "Não foi possível retirar a banda do banco de dados!";
        }
    }
}
?>
