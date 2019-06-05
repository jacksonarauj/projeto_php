	<form method="POST" action="index.php/Teste/Login" name="FormSenha" onsubmit="return validarSenha();">
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
			
			<div>
				<button class="btn btn-action" type="submit">Login</button>
			</div>
			<div >
				<b><a href="index.php/Teste/Registrar">Registrar</a></b>
			</div>
			<div>
				<b><a href="index.php/Teste/RecuperarSenha">Esqueceu a senha?</a></b>
			</div>
		</div>
	</form>