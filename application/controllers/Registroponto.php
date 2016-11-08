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
			'<script src="'.base_url('scripts/ajax_lib.js').'"></script>',
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
		$this->input->post('data') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$dados_registro = array(
			'data'        => $this->registroponto_model->formata_data_mysql($this->input->post('data')),
			'folga'       => $this->input->post('folga'),
			'entrada_1'   => $this->input->post('entrada_1'),
			'saida_1'     => $this->input->post('saida_1'),
			'entrada_2'   => $this->input->post('entrada_2'),
			'saida_2'     => $this->input->post('saida_2'),
			'observacoes' => $this->input->post('observacoes')
		);
		if ($this->registroponto_model->registrar('reg_ponto_carlu', $dados_registro) == true) {
			$this->session->set_flashdata('sucesso', 'Registro gravado com sucesso.');
			redirect(site_url(), 'refresh');
		}
	}

	public function buscar()
	{
		$this->input->post('valor') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$id = $this->input->post('valor');
		$dados = $this->registroponto_model->buscar_registro('reg_ponto_carlu', 'id', $id);
		$dados_registro = array(
			'data'        => $this->registroponto_model->formata_data($dados->data),
			'folga'       => $dados->folga,
			'entrada_1'   => $this->registroponto_model->formata_hora($dados->entrada_1),
			'saida_1'     => $this->registroponto_model->formata_hora($dados->saida_1),
			'entrada_2'   => $this->registroponto_model->formata_hora($dados->entrada_2),
			'saida_2'     => $this->registroponto_model->formata_hora($dados->saida_2),
			'observacoes' => $dados->observacoes
		);
		header("Content-Type: application/json; charset=UTF-8");
		if (isset($dados_registro)) {
			$json_registro = json_encode($dados_registro, JSON_UNESCAPED_UNICODE);
			echo $json_registro;
		} else {
			echo "[]";
		}
	}

	public function editar()
	{
		$this->input->post('editar') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$id = $this->input->post('editar');
		$dados_registro = array(
			'data'        => $this->registroponto_model->formata_data_mysql($this->input->post('data')),
			'folga'       => $this->input->post('folga'),
			'entrada_1'   => $this->input->post('entrada_1'),
			'saida_1'     => $this->input->post('saida_1'),
			'entrada_2'   => $this->input->post('entrada_2'),
			'saida_2'     => $this->input->post('saida_2'),
			'observacoes' => $this->input->post('observacoes')
		);
		if ($this->registroponto_model->editar_registro('reg_ponto_carlu', $id, $dados_registro) == true) {
			$this->session->set_flashdata('sucesso', 'Registro editado com sucesso.');
			redirect(site_url(), 'refresh');
		}
	}

	public function remover()
	{
		$this->input->post('remover') OR exit(show_error('Acesso não permitido.', 403, '403 Forbidden'));
		$id = $this->input->post('remover');
		if ($this->registroponto_model->remover('reg_ponto_carlu', $id) == true) {
			$this->session->set_flashdata('sucesso', 'Registro removido com sucesso.');
			redirect(site_url(), 'refresh');
		}
	}
}
