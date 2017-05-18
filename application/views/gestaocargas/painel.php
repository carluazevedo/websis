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
					<th>DT</th>
					<th>STATUS</th>
					<th>DATA DE ATUALIZAÇÃO</th>
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
				<?php foreach ($registros as $reg) : ?>

				<tr>
					<td><?php echo $reg->id; ?></td>
					<td><?php echo $reg->dt; ?></td>
					<td><?php echo $reg->status; ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($reg->data_atualizacao); ?></td>
					<td><?php echo $reg->transportadora; ?></td>
					<td><?php echo ($reg->isca == 0) ? '-' : $reg->isca; ?></td>
					<td><?php echo ($reg->monitoramento == '') ? '-' : $reg->monitoramento; ?></td>
					<td><?php echo ($reg->escolta_1 == '') ? '-' : $reg->escolta_1 ; ?></td>
					<td><?php echo ($reg->escolta_2 == '') ? '-' : $reg->escolta_2 ; ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($reg->data_checkin); ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($reg->data_checkout); ?></td>
					<td><?php echo ($reg->isca_inserida == '') ? '-' : $reg->isca_inserida; ?></td>
				</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</body>
</html>