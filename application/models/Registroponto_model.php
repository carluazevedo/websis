<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registroponto_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->config('ion_auth', true);
	}

	/**
	 * Listar Registros
	 *
	 * Lista registros com base nos parâmetros informados e retorna os resultados
	 * em 'array' ou, por padrão, em 'object'.
	 *
	 * @param    string   $tabela             Nome da tabela
	 * @param    mixed    $colunas            Pode ser string ou array
	 * @param    string   $criterio_where     Se informado, critério da cláusula 'WHERE'
	 * @param    mixed    $condicao_where     Se informado, condição da cláusula 'WHERE'
	 * @param    bool     $resultado_matriz   Se falso 'object', se verdadeiro 'array'
	 * @return   Retorna os resultados em 'array' ou, por padrão, em 'object'
	 */
	public function listar_registros($tabela, $colunas = '', $criterio_where = '', $condicao_where = '', $resultado_matriz = false)
	{
		$this->db->select($colunas);
		if ($criterio_where != '' && $condicao_where != '') {
			$this->db->where($criterio_where, $condicao_where);
		}
		$this->db->order_by('data', 'DESC');
		$query = $this->db->get($tabela);
		if ($resultado_matriz == false) {
			return $query->result();
		} elseif ($resultado_matriz == true) {
			return $query->result_array();
		}
	}

	/* Funções para tratamento de exibição de dados */
	public function usuario_atual()
	{
		if ($this->config->item('identity', 'ion_auth') == 'email') {
			$string = $this->session->userdata('identity');
			$exploded = explode('@', $string);
			$identidade = array_shift($exploded);
			return $identidade;
		} elseif ($this->config->item('identity', 'ion_auth') == 'username') {
			return $this->session->userdata('identity');
		}
	}
}
