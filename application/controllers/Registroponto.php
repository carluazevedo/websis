<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registroponto extends CI_Controller {

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
		$data['incluir_cabecalho'] = array(
			link_tag('styles/geral.css'),				
			link_tag('scripts/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')				
		);
		$data['view']              = 'registroponto/painel';
		/* Informações para 'view' */
		$data['titulo_pagina'] = 'Registro de Ponto';
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array(
			$this->load->view('registroponto/painel_scripts', '', true),
			'<script src="'.base_url('scripts/jquery-mask/jquery.mask.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js').'"></script>',
			'<script src="'.base_url('scripts/painel.js').'"></script>'
		);
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

	public function registrar()
	{
		
	}
}
