<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoprodutos extends CI_Controller {

	public $titulo = 'WebSIS';
	
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('identity')) redirect('auth');
		$this->load->model('geral_model');
		$this->load->model('infoprodutos_model');
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
		$view = 'infoprodutos/painel';
		$data['titulo_pagina'] = 'Infoprodutos';
		$data['nav_infoprodutos'] = true;
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array(
			'<script src="'.base_url('scripts/jquery-mask/jquery.mask.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/js/bootstrap-datepicker.min.js').'"></script>',
			'<script src="'.base_url('scripts/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js').'"></script>',
			'<script src="'.base_url('scripts/ajax_lib.js').'"></script>'
		);
		/* Lógica do controlador */
		$data['produtos']  = $this->infoprodutos_model->listar_registros('infoprod', '', 'produto');
		$data['links']     = $this->infoprodutos_model->listar_registros('infoprod_links');
		$data['midias']    = $this->infoprodutos_model->listar_registros('infoprod_midias');
		$data['campanhas'] = $this->infoprodutos_model->listar_registros('infoprod_camp');
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}
}
