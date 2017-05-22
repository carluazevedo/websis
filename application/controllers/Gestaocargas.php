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
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array('<script src="'.base_url('scripts/gestaocargas_painel.js').'"></script>');
		/* Lógica do controlador */
		$dados_gestao = $this->gestaocargas_model->listar_registros('gestaocargas', '', 'ASC');
		$dados_gestao_dt = array();
		$dados_gestao_k9 = array();

		echo '<pre>';

		for ($i = 0; $i < count($dados_gestao); $i++) {
			array_push($dados_gestao_dt, preg_replace('/^000(\d+).+000(\d+)/', '$1', $dados_gestao[$i]->dt));
			array_push(
				$dados_gestao_k9, $this->gestaocargas_model->pesquisar_registros(
					'gestaocargas_dados_k9', 'dt', preg_replace('/^000(\d+).+000(\d+)/', '$1', $dados_gestao[$i]->dt)
				)
			);
		}
		var_dump($dados_gestao_dt);
		var_dump($dados_gestao_k9);

		echo '</pre>';
		/* Conclusão */
		#$this->load->view($view, $data);
	}
}
