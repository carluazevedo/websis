<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marketingdigital extends CI_Controller {

	public $titulo = 'WebSIS';
	
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('identity')) redirect('auth');
		$this->load->model('geral_model');
	}

	public function index()
	{
		/* Informações para 'cabecalho.php' */
		$data['titulo']            = $this->titulo;
		$data['incluir_cabecalho'] = array(
			link_tag('styles/geral.css'),				
			link_tag('scripts/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')				
		);
		/* Informações para 'view' */
		$view = 'marketingdigital/painel';
		$data['titulo_pagina'] = 'Marketing Digital';
		$data['nav_marketingdigital'] = true;
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array(
			'<script src="'.base_url('scripts/jquery-mask/jquery.mask.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js').'"></script>',
			'<script src="'.base_url('scripts/ajax_lib.js').'"></script>'
		);
		/* Lógica do controlador */
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}
}
