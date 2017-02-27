<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->config('ion_auth', true);
	}

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

	/* Funções para tratamento de exibição de dados */
	public function formata_data($data)
	{
		$dataf = date_format(date_create($data), 'd/m/Y');
		return $dataf;
	}
}
