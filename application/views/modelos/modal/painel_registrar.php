<!-- Modal 'registrar' -->
<div class="modal fade" id="modal-registrar" tabindex="-1" role="dialog" aria-labelledby="RegistrarPonto">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">
					<span class="glyphicon glyphicon-plus small" aria-hidden="true"></span> Registrar ponto
				</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<form action="" method="post" class="form-horizontal" id="registrar-ponto" accept-charset="utf-8" onsubmit="converterCaixaAlta()">
							<div class="form-group">
								<label for="data" class="col-sm-4 control-label" title="Data do registro">Data</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="data" id="data">
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="folga" class="col-sm-4 control-label" title="Dia de folga">Folga</label>
								<div class="col-sm-4">
									<label class="radio-inline">
										<input type="radio" name="folga" id="folga" value="1">
										Sim
									</label>
									<label class="radio-inline">
										<input type="radio" name="folga" value="0">
										Não
									</label>
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="entrada_1" class="col-sm-4 control-label" title="Entrada 1">Entrada</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="entrada_1" id="entrada_1">
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="saida_1" class="col-sm-4 control-label" title="Saída 1">Saída</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="saida_1" id="saida_1">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="entrada_2" class="col-sm-4 control-label" title="Entrada 2">Entrada</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="entrada_2" id="entrada_2">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="saida_2" class="col-sm-4 control-label" title="Saída 2">Saída</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="saida_2" id="saida_2">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="observacoes" class="col-sm-4 control-label" title="Observações">Observações</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="observacoes" id="observacoes">
								</div>
							</div><!-- /.form-group -->
						</form><!-- .form-horizontal -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div><!-- /.modal-body -->
			<div class="modal-footer">
				<button type="submit" class="btn btn-success" id="registrar" name="registrar" form="registrar-ponto">Registrar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /Modal 'registrar' -->