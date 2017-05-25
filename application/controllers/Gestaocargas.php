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
		$data['incluir_cabecalho'] = array(
			link_tag('styles/fonts/ubuntu_mono.css'),
			link_tag('styles/gestaocargas.css')
		);
		/* Informações para 'view' */
		$view = 'gestaocargas/painel';
		$data['titulo_pagina'] = 'Gestão de Cargas';
		/* Informações para 'rodape.php' */
		$data['incluir_rodape'] = array('<script src="'.base_url('scripts/gestaocargas_painel.js').'"></script>');
		/* Lógica do controlador */
		$gestao = $this->gestaocargas_model->listar_registros('gestaocargas', '', 'ASC');
		$gestao_k9 = array();
		$gestao_tmp = array();
		$data['gestao'] = array();
		/* ->Preparação de dados para exibição */
		for ($i = 0; $i < count($gestao); $i++) {
			/* ->Armazena os resultados da pesquisa de cada DT usando expressão regular */
			array_push(
				$gestao_k9, $this->gestaocargas_model->pesquisar_registros(
					'gestaocargas_dados_k9', 'dt', preg_replace('/^000(\d+).+000(\d+)/', '$1', $gestao[$i]->dt)
				)
			);
			/* ->Falsa função 'JOIN' */
			$gestao_tmp[$i]['id']               = $gestao[$i]->id;
			$gestao_tmp[$i]['data_atualizacao'] = $gestao[$i]->data_atualizacao;
			$gestao_tmp[$i]['status']           = $gestao[$i]->status;
			$gestao_tmp[$i]['dt']               = $gestao[$i]->dt;
			$gestao_tmp[$i]['transportadora']   = $gestao[$i]->transportadora;
			$gestao_tmp[$i]['isca']             = $gestao[$i]->isca;
			$gestao_tmp[$i]['monitoramento']    = $gestao[$i]->monitoramento;
			$gestao_tmp[$i]['escolta_1']        = $gestao[$i]->escolta_1;
			$gestao_tmp[$i]['escolta_2']        = $gestao[$i]->escolta_2;
			$gestao_tmp[$i]['data_checkin']     = $gestao[$i]->data_checkin;
			$gestao_tmp[$i]['data_checkout']    = $gestao[$i]->data_checkout;
			$gestao_tmp[$i]['isca_inserida']    = $gestao[$i]->isca_inserida;
			$gestao_tmp[$i]['resultados']       = count($gestao_k9[$i]);
			/* ->Transforma 'ARRAY' comum em 'ARRAY' de objetos */
			$data['gestao'][$i] = (object) $gestao_tmp[$i];
		}
		#echo '<pre>';
		#var_dump($gestao);
		#var_dump($gestao_k9);
		#var_dump($gestao_tmp);
		#var_dump($data['gestao']);
		#echo '</pre>';
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}

	public function buscar()
	{
		$this->input->post('valor') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$id = $this->input->post('valor');
	}
}
