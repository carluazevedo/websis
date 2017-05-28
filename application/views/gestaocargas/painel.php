<table class="table table-bordered table-condensed table-hover">
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
			<th>RESULT. <?php echo strtoupper($base_dados); ?></th>
		</tr>
	</thead>
	<tbody class="text-nowrap">
		<?php foreach ($gestao as $g) : ?>

		<tr>
			<td data-dt=""><?php echo $g->id; ?></td>
			<td hidden><?php echo $this->geral_model->formata_data_hora($g->data_atualizacao); ?></td>
			<td class="status"><?php echo $g->status; ?></td>
			<td><?php echo $g->dt; ?></td>
			<td><?php echo $g->transportadora; ?></td>
			<td><?php echo ($g->isca == 0) ? '-' : $g->isca; ?></td>
			<td><?php echo ($g->monitoramento == '' || $g->monitoramento == '0') ? '-' : $g->monitoramento; ?></td>
			<td><?php echo ($g->escolta_1 == '' || $g->escolta_1== '0') ? '-' : $g->escolta_1 ; ?></td>
			<td><?php echo ($g->escolta_2 == '' || $g->escolta_2== '0') ? '-' : $g->escolta_2 ; ?></td>
			<td><?php echo $this->geral_model->formata_data_hora($g->data_checkin); ?></td>
			<td><?php echo $this->geral_model->formata_data_hora($g->data_checkout); ?></td>
			<td><?php echo ($g->isca_inserida == '' || $g->isca_inserida == '0') ? '-' : $g->isca_inserida; ?></td>
			<?php
				if ($g->resultados == '0') :
			echo '<td></td>'.PHP_EOL;
				else :
			printf('<td id="%s" onclick="resultados(this)">%s</td>'.PHP_EOL, $g->numero_dt, $g->resultados);
				endif;
			?>
		</tr>
		<?php endforeach; ?>

	</tbody>
</table>