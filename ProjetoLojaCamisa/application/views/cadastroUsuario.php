	<form method="POST" action="../Teste/Inserir" name="FormSenha" onsubmit="return validarSenha();">
								<div class="top-margin">
									<label>Nome</label>
									<input type="text" class="form-control" name="nome_cadastro">
								</div>
								<div class="top-margin">
									<label>Sobrenome</label>
									<input type="text" class="form-control" name="sobrenome_cadastro">
								</div>
								<div class="top-margin">
									<label>Endereço de E-mail<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="email_cadastro">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Senha <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="senha_cadastro">
									</div>									
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<!--<label class="checkbox">
											<input type="checkbox"> 
											Estou de acordo com os <a href="page_terms.html">Termos de uso</a>
										</label>  -->                      
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Registrar</button>
									</div>
								</div>
							</form>