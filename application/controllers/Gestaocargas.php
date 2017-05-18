<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestaocargas extends CI_Controller {

	public $titulo = 'WebSIS';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('geral_model');
		$this->load->model('gestaocargas_model');
	}

	public function index()
	{
		/* Informações para cabecalho */
		$data['titulo'] = $this->titulo;
		$data['incluir_cabecalho'] = array(link_tag('styles/gestaocargas.css'));
		/* Informações para 'view' */
		$view = 'gestaocargas/painel';
		$data['titulo_pagina'] = 'Gestão de Cargas';
		/* Lógica do controlador */
		$colunas = array(
			'id',
			'dt',
			'status',
			'data_atualizacao',
			'transportadora',
			'isca',
			'monitoramento',
			'escolta_1',
			'escolta_2',
			'data_checkin',
			'data_checkout',
			'isca_inserida'
		);
		$data['registros'] = $this->gestaocargas_model->listar_registros('gestaocargas', $colunas, 'ASC');
		/* Conclusão */
		$this->load->view($view, $data);
	}
}
