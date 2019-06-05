<?php

include "index.php/Teste/Conexao";

$Nome = $_POST["nome_cadastro"];
$Sobrenome = $_POST["sobrenome_cadastro"];
$Email = $_POST["email_cadastro"];
$Senha = md5($_POST["senha_cadastro"]);
 $admin ="admin";
 

$conn = criarConexao();


	$tabela ="usuario";
	$sql = "SELECT Nome,Senha FROM $tabela WHERE senha = '$Senha' and Nome = '$Nome'";
	
	$result = mysqli_query($conn, $sql);
if($result){
		
	while ($linha = mysqli_fetch_array($result)){
		
		if($linha['0'] == $admin && $linha['1'] == $admin){
			echo"<script>alert('Usuario e Senha ja esta cadastrado.')</script>";
			echo "<script> window.location.href = '../inscreverV.html' </script>";	
			
		}else if($linha['0'] == $Nome && $linha['1'] == $Senha){
		
			echo"<script>alert('Usuario e Senha ja esta cadastrado.')</script>";
			echo "<script> window.location.href = '../inscreverV.html' </script>";
			
		}
	}
	//caso select esteja vazio passa aqui
	
	$sql="insert into usuario(Nome,Sobrenome,Email,Senha) values ('$Nome','$Sobrenome','$Email','$Senha')";
	
	$inserir = mysqli_query($conn,$sql);

	if ($inserir) {
		echo "<script>alert('Cadastrado com sucesso.')</script>";
	} else {
		echo "<script>alert('Erro ao cadastrar.')</script>";
	}

	echo "<script> window.location.href = 'index.php/Teste/Login.html' </script>";
	
} else{
	//caso ter erro
	echo"<script>alert('Erro de conexao.')</script>";
	echo"<script> window.location.href = 'index.php/Teste/Registrar' </script>";
	
}
 index.php/Teste;
    
 mysqli_close($conn);   
?>