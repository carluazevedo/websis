<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curriculos extends CI_Controller {

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
			link_tag('styles/curriculos.css')
		);
		/* Informações para 'view' */
		$view = 'curriculos/painel';
		$data['titulo_pagina'] = 'Currículos';
		$data['nav_curriculos'] = true;
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array(
			$this->load->view('registroponto/painel_scripts', '', true),
			'<script src="'.base_url('scripts/libs/ajax_lib.js').'"></script>',
			'<script src="'.base_url('scripts/curriculos_painel.js').'"></script>'
		);
		/* Lógica do controlador */
		//
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}

	public function buscar()
	{
		$this->input->post('valor') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$nome = $this->input->post('valor');
		header("Content-Type: text/html; charset=UTF-8");
		$this->load->view('curriculos/curriculo_'.str_replace('#', '', $nome));
	}
}
