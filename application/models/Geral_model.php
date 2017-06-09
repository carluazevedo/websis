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

	public function formata_data_hora($data)
	{
		if ($data == 0) {
			return '';
		} else {
			$dataf = date_format(date_create($data), 'd/m/Y H:i');
			return $dataf;
		}
	}

	public function calcula_idade($data)
	{
		$data_nasc = date_create($data);
		$data_atual = date_create();

		$nasc['dia'] = date_format($data_nasc, 'd');
		$nasc['mes'] = date_format($data_nasc, 'm');
		$nasc['ano'] = date_format($data_nasc, 'Y');

		$atual['dia'] = date_format($data_atual, 'd');
		$atual['mes'] = date_format($data_atual, 'm');
		$atual['ano'] = date_format($data_atual, 'Y');

		$idade = $atual['ano'] - $nasc['ano'];

		if ($atual['mes'] < $nasc['mes']) {
			$idade -= 1;
		} else if ($atual['mes'] == $nasc['mes']) {
			if ($atual['dia'] < $nasc['dia']) $idade -= 1;
		}

		echo $idade.' anos';
	}
}
