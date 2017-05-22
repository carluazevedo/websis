<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<?php
		if (isset($incluir_cabecalho)) :
			foreach ($incluir_cabecalho as $i) : echo $i; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</head>

	<body>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th hidden>DATA DE ATUALIZAÇÃO</th>
					<th>STATUS</th>
					<th>DT</th>
					<th>TRANSPORTADORA</th>
					<th title="Quantidade por embarque">ISCA</th>
					<th title="Solicitação de monitoramento">MON.</th>
					<th>ESCOLTA 200KM</th>
					<th>ESCOLTA PORTA A PORTA</th>
					<th>CHECK-IN</th>
					<th>CHECK-OUT</th>
					<th>ISCA INSERIDA</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($dados_gestao as $gestao) : ?>

				<tr>
					<td><?php echo $gestao->id; ?></td>
					<td hidden><?php echo $this->geral_model->formata_data_hora($gestao->data_atualizacao); ?></td>
					<td class="status"><?php echo $gestao->status; ?></td>
					<td><?php echo $gestao->dt; ?></td>
					<td><?php echo $gestao->transportadora; ?></td>
					<td><?php echo ($gestao->isca == 0) ? '-' : $gestao->isca; ?></td>
					<td><?php echo ($gestao->monitoramento == '') ? '-' : $gestao->monitoramento; ?></td>
					<td><?php echo ($gestao->escolta_1 == '') ? '-' : $gestao->escolta_1 ; ?></td>
					<td><?php echo ($gestao->escolta_2 == '') ? '-' : $gestao->escolta_2 ; ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($gestao->data_checkin); ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($gestao->data_checkout); ?></td>
					<td><?php echo ($gestao->isca_inserida == '') ? '-' : $gestao->isca_inserida; ?></td>
				</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
		<footer>
			<span id="end"></span>
		</footer>
		<!-- jQuery -->
		<script src="<?php echo base_url('jquery/jquery.min.js'); ?>"></script>
		<?php
		if (isset($incluir_rodape)) :
			foreach ($incluir_rodape as $i) : echo $i.PHP_EOL; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</body>
</html>