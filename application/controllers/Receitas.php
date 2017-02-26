<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receitas extends CI_Controller {

	public $titulo = 'WebSIS';

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('identity')) redirect('auth');
		$this->load->model('geral_model');
		$this->load->model('receitas_model');
	}

	public function index()
	{
		redirect('receitas/ver');
	}

	public function ver($id = 1)
	{
		/* Informações para 'cabecalho.php' */
		$data['titulo']            = $this->titulo;
		$data['incluir_cabecalho'] = array(link_tag('styles/geral.css'));
		/* Informações para 'view' */
		$view = 'receitas/painel';
		$data['titulo_pagina'] = 'Receitas';
		$data['nav_receitas'] = true;
		/* Informações para 'rodape.php' */
		/* Lógica do controlador */
		$colunas = array(
				'titulo',
				'data_criacao',
				'data_alteracao',
				'foi_testada',
				'rendimento',
				'imagem',
				'categorias'
		);
		$data['info'] = $this->receitas_model->buscar_registro('receitas', 'id', $id, $colunas);
		$data['ingr'] = $this->receitas_model->buscar_registro('receitas', 'id', $id, 'ingredientes');
		$data['prep'] = $this->receitas_model->buscar_registro('receitas', 'id', $id, 'preparo');
		$data['font'] = $this->receitas_model->buscar_registro('receitas', 'id', $id, 'fonte');
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}
}
