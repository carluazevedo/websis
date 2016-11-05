<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroPonto extends CI_Controller {

	public $titulo = 'WebSIS';
	
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('identity')) redirect('auth');
		$this->load->model('registroponto_model');
	}

	public function index()
	{
		/* Informações para 'cabecalho.php' */
		$data['titulo']            = $this->titulo;
		$data['incluir_cabecalho'] = array(link_tag('styles/geral.css'));
		$data['view']              = 'registroponto/painel';
		/* Informações para 'view' */
		$data['titulo_pagina'] = 'Registro de Ponto';
		/* Lógica do controlador */
		$colunas = array(
			'id',
			'data',
			'folga',
			'entrada_1',
			'saida_1',
			'entrada_2',
			'saida_2',
			'observacoes'
		);
		$data['registros'] = $this->registroponto_model->listar_registros('reg_ponto_carlu', $colunas);
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view('modelos/rodape', $data);
	}
}
