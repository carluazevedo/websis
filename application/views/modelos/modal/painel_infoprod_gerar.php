<!-- Modal 'infoprod-gerar' -->
<div class="modal fade" id="modal-infoprod-gerar" tabindex="-1" role="dialog" aria-labelledby="InfoprodutosGerarLink">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">
					<span class="glyphicon glyphicon-link small" aria-hidden="true"></span> Gerar link
				</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<label for="prefixo1">Prefixo para 'src'</label>
						<div class="btn-group btn-group-justified" id="seleciona_prefixo" data-toggle="buttons">
							<label class="btn btn-default active">
								<input type="radio" name="prefixo" id="prefixo1" autocomplete="off" value="?" checked> &#63;
							</label>
							<label class="btn btn-default">
								<input type="radio" name="prefixo" id="prefixo2" autocomplete="off" value="&"> &#38;
							</label>
						</div><!-- /.btn-group -->
						<input type="hidden" id="linha">
						<input type="hidden" id="prefixo">
						<a href="javascript:void(0)" id="link_gerado"></a>
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div><!-- /.modal-body -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /Modal 'infoprod-gerar' -->
