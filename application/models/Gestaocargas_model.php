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
		$query = $this->db->select($colunas)
			->where($criterio_where, $condicao_where)
			->get($tabela);
		if ($resultado_matriz == false) {
			return $query->row();
		} elseif ($resultado_matriz == true) {
			return $query->row_array();
		}
	}

	/**
	 * Pesquisar Registros
	 *
	 * Pesquisa registros com base nos parâmetros informados e retorna os resultados
	 * em 'array' ou, por padrão, em 'object', utilizando a cláusula 'LIKE' para
	 * corresponder com string parcial.
	 *
	 * @param    string   $tabela             Nome da tabela
	 * @param    string   $criterio_where     Critério da cláusula 'LIKE'
	 * @param    mixed    $condicao_where     Condição da cláusula 'LIKE'
	 * @param    mixed    $colunas            Pode ser string ou array
	 * @param    bool     $resultado_matriz   Se falso 'object', se verdadeiro 'array'
	 * @return   Retorna o resultado em 'array' ou, por padrão, em 'object'
	 */
	public function pesquisar_registros($tabela, $criterio_like, $condicao_like, $colunas = '', $resultado_matriz = false)
	{
		$query = $this->db->select($colunas)
			->like($criterio_like, $condicao_like, 'both')
			->get($tabela);
		if ($resultado_matriz == false) {
			return $query->result();
		} elseif ($resultado_matriz == true) {
			return $query->result_array();
		}
	}
}
