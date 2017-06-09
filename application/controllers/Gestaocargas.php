<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestaocargas extends CI_Controller {

	public $titulo = 'WebSIS';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('geral_model');
		$this->load->model('gestaocargas_model', 'gc_model');
	}

	public function index()
	{
		redirect('gestaocargas/dados/k9/05');
	}

	public function dados($base = 'k9', $periodo = '05')
	{
		/* Declaração de variáveis */
		$tabela = 'gestaocargas_dados_'.$base;
		$numero_dt = array();
		$resultados = array();
		$data['gestao'] = array();
		$data['base_dados'] = $base;
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
		$data['incluir_rodape'] = array(
			$this->load->view('gestaocargas/painel_scripts', $data, true),
			'<script src="'.base_url('scripts/libs/ajax_lib.js').'"></script>',
			'<script src="'.base_url('scripts/gestaocargas_painel.js').'"></script>'
		);
		/* Lógica do controlador */
		/* ->Seleciona os dados conforme o mês especificado no argumento '$periodo' */
		$gestao = $this->db->select()
			->where('MONTH(data_atualizacao)', $periodo)
			->order_by('id', 'ASC')
			->get('gestaocargas')
			->result();
		/* ->Preparação de dados para exibição */
		for ($i = 0; $i < count($gestao); $i++) {
			/* ->Transforma os dados da coluna 'dt' para um formato especifico usando expressão regular */
			array_push($numero_dt, preg_replace('/^000(\d+).+000(\d+)/', '$1', $gestao[$i]->dt));
			/* ->Armazena os resultados da pesquisa de cada DT */
			array_push($resultados, $this->gc_model->pesquisar_registros($tabela, 'dt', $numero_dt[$i]));
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
			$gestao_tmp[$i]['numero_dt']        = $numero_dt[$i];
			$gestao_tmp[$i]['resultados']       = count($resultados[$i]);
			/* ->Transforma 'ARRAY' comum em 'ARRAY' de objetos */
			$data['gestao'][$i] = (object) $gestao_tmp[$i];
		}
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}

	public function buscar($base = '')
	{
		$this->input->post('valor') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$numero_dt = $this->input->post('valor');
		$tabela = 'gestaocargas_dados_'.$base;
		$resultados = $this->gc_model->pesquisar_registros($tabela, 'dt', $numero_dt);
		header("Content-Type: text/html; charset=UTF-8");
		for ($i = 0; $i < count($resultados); $i++) {
			echo "<table class='table table-hover table-condensed'>
					<tr><th>DT</th><td>{$resultados[$i]->dt}</td></tr>
					<tr><th>STATUS</th><td>{$resultados[$i]->status}</td></tr>
					<tr><th>PLACAS</th><td>{$resultados[$i]->veiculo}/{$resultados[$i]->reboque}</td></tr>
					<tr><th>DATA DE CRIAÇÃO</th><td>{$this->geral_model->formata_data_hora($resultados[$i]->data_criacao)}</td></tr>
					<tr><th>INÍCIO REAL</th><td>{$this->geral_model->formata_data_hora($resultados[$i]->inicio_real)}</td></tr>
					<tr><th>FIM REAL</th><td>{$this->geral_model->formata_data_hora($resultados[$i]->fim_real)}</td></tr>
				</table>";
		}
	}
}
