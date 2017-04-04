<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receitas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Buscar Registro
	 *
	 * Busca um registro com base nos parâmetros informados e retorna o resultado
	 * em 'array' ou, por padrão, em 'object'.
	 *
	 * @param    string   $tabela             Nome da tabela (obrigatório)
	 * @param    string   $criterio_where     Critério da cláusula 'WHERE' (obrigatório)
	 * @param    mixed    $condicao_where     Condição da cláusula 'WHERE' (obrigatório)
	 * @param    mixed    $colunas            Pode ser string ou array
	 * @param    bool     $resultado_matriz   Se falso 'object', se verdadeiro 'array'
	 * @return   Retorna o resultado em 'array' ou, por padrão, em 'object'
	 */
	public function buscar_registro($tabela, $criterio_where, $condicao_where, $colunas = '', $resultado_matriz = false)
	{
		$this->db->select($colunas);
		$this->db->where($criterio_where, $condicao_where);
		$query = $this->db->get($tabela);
		if ($resultado_matriz == false) {
			return $query->row();
		} elseif ($resultado_matriz == true) {
			return $query->row_array();
		}
	}

	public function listar_registros($tabela, $colunas = '', $ordem = 'DESC', $limite = '', $deslocamento = '', $resultado_matriz = false)
	{
		$query = $this->db->select($colunas)
		->order_by('titulo', $ordem)
		->limit($limite, $deslocamento)
		->get($tabela);
		if ($resultado_matriz == false) {
			return $query->result();
		} elseif ($resultado_matriz == true) {
			return $query->result_array();
		}
	}
}
