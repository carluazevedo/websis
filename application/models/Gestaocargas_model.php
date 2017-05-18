<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestaocargas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function listar_registros($tabela, $colunas = '', $ordem = 'DESC', $limite = '', $deslocamento = '', $resultado_matriz = false)
	{
		$query = $this->db->select($colunas)
		->order_by('id', $ordem)
		->limit($limite, $deslocamento)
		->get($tabela);
		if ($resultado_matriz == false) {
			return $query->result();
		} elseif ($resultado_matriz == true) {
			return $query->result_array();
		}
	}
}