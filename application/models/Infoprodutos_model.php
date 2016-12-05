<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoprodutos_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function registrar($tabela, $dados)
	{
		$this->db->insert($tabela, $dados);
		if ($this->db->affected_rows() == '1') {
			return true;
		}
		return false;
	}

	public function listar_registros($tabela, $colunas = '', $ordenar = 'id', $resultado_matriz = false)
	{
		$query = $this->db->select($colunas)
						  ->order_by($ordenar, 'ASC')
						  ->get($tabela);
		if ($resultado_matriz == false) {
			return $query->result();
		} elseif ($resultado_matriz == true) {
			return $query->result_array();
		}
	}

	public function listar_total_registros($tabela)
	{
		return $this->db->count_all($tabela);
	}

	/**
	 * Buscar Registro
	 *
	 * Busca um registro com base nos parâmetros informados e retorna o resultado
	 * em 'array' ou, por padrão, em 'object'.
	 *
	 * @param    string   $tabela             Nome da tabela
	 * @param    string   $criterio_where     Critério da cláusula 'WHERE'
	 * @param    mixed    $condicao_where     Condição da cláusula 'WHERE'
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

	public function editar_registro($tabela, $id, $dados)
	{
		$this->db->where('id', $id);
		$this->db->update($tabela, $dados);
		if ($this->db->affected_rows() == '1') {
			return true;
		}
		return false;
	}

	public function remover($tabela, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($tabela);
		if ($this->db->affected_rows() == '1') {
			return true;
		}
		return false;
	}

	/* Funções para tratamento de exibição de dados */
	public function formata_data($data)
	{
		$dataf = date_format(date_create($data), 'd/m/Y');
		return $dataf;
	}

	public function formata_hora($hora)
	{
		$horaf = date_format(date_create($hora), 'H:i');
		return $horaf;
	}

	public function formata_data_mysql($data)
	{
		$dataf = date('Y-m-d', strtotime(str_replace('/', '-', $data)));
		return $dataf;
	}
}
