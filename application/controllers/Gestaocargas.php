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
		$gestao = $this->gestaocargas_model->listar_registros('gestaocargas', '', 'ASC');
		$data['gestao'] = array();
		$data['gestao_k9'] = array();
		for ($i = 0; $i < count($gestao); $i++) {
			array_push(
				$data['gestao_k9'], $this->gestaocargas_model->pesquisar_registros(
					'gestaocargas_dados_k9', 'dt', preg_replace('/^000(\d+).+000(\d+)/', '$1', $gestao[$i]->dt)
				)
			);
			$data['gestao'][$i]['id']               = $gestao[$i]->id;
			$data['gestao'][$i]['data_atualizacao'] = $gestao[$i]->data_atualizacao;
			$data['gestao'][$i]['status']           = $gestao[$i]->status;
			$data['gestao'][$i]['dt']               = $gestao[$i]->dt;
			$data['gestao'][$i]['transportadora']   = $gestao[$i]->transportadora;
			$data['gestao'][$i]['isca']             = $gestao[$i]->isca;
			$data['gestao'][$i]['monitoramento']    = $gestao[$i]->monitoramento;
			$data['gestao'][$i]['escolta_1']        = $gestao[$i]->escolta_1;
			$data['gestao'][$i]['escolta_2']        = $gestao[$i]->escolta_2;
			$data['gestao'][$i]['data_checkin']     = $gestao[$i]->data_checkin;
			$data['gestao'][$i]['data_checkout']    = $gestao[$i]->data_checkout;
			$data['gestao'][$i]['isca_inserida']    = $gestao[$i]->isca_inserida;
		}

		echo '<pre>';
		#var_dump($gestao);
		var_dump($data['gestao']);
		var_dump($data['gestao_k9']);
		echo '</pre>';
		/* Conclusão */
		#$this->load->view($view, $data);
	}
}
