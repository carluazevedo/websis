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
						<form class="form-horizontal" id="registrar-ponto" accept-charset="utf-8">
							<div class="form-group">
								<label for="data_registrar" class="col-sm-4 control-label" title="Data do registro">Data</label>
								<div class="col-sm-4">
									<div class="input-group">
										<input type="text" class="form-control" name="data" id="data_registrar" value="" required>
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-remove small" aria-hidden="true"></span>
										</div>
									</div><!-- /.input-group -->
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="folga_nao_registrar" class="col-sm-4 control-label" title="Dia de folga">Folga</label>
								<div class="col-sm-4">
									<div class="btn-group btn-group-justified" data-toggle="buttons">
										<label class="btn btn-default">
											<input type="radio" name="folga" value="0" autocomplete="off" id="folga_nao_registrar" required> NÃO
										</label>
										<label class="btn btn-default">
											<input type="radio" name="folga" value="1" autocomplete="off" id="folga_sim_registrar"> SIM
										</label>
									</div><!-- /.btn-group -->
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="entrada_1_registrar" class="col-sm-4 control-label" title="Entrada 1">Entrada</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="entrada_1" id="entrada_1_registrar">
								</div>
							</div><!-- /.form-group -->

							<div class="form-group">
								<label for="saida_1_registrar" class="col-sm-4 control-label" title="Saída 1">Saída</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="saida_1" id="saida_1_registrar">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="entrada_2_registrar" class="col-sm-4 control-label" title="Entrada 2">Entrada</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="entrada_2" id="entrada_2_registrar">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="saida_2_registrar" class="col-sm-4 control-label" title="Saída 2">Saída</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="saida_2" id="saida_2_registrar">
								</div>
							</div><!-- /.form-group -->
				
							<div class="form-group">
								<label for="observacoes_registrar" class="col-sm-4 control-label" title="Observações">Observações</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" name="observacoes" id="observacoes_registrar">
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
