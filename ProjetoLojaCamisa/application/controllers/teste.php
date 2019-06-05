<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function Ola(){
		
		$this->load->view('batata');
		
	}
	
		public function Topo(){
		
		$this->load->view('Topo/topo1');
		
	}
	
		public function Receber()
	{
		
		/*var_dump($_POST);*/
		
		$nome_cadastro = $_POST["nome_cadastro"];
		$sobrenome_cadastro = $_POST["sobrenome_cadastro"];
		$email_cadastro = $_POST["email_cadastro"];
		$senha_cadastro = $_POST["senha_cadastro"];
		$senha2_cadastro = $_POST["senha2_cadastro"];
		
		$dados = array(
			
			'nome_cadastro' => $nome_cadastro,'email_cadastro' => $email_cadastro, 'senha_cadastro' =>$senha_cadastro,
		);		
			$this->load->view('receber',$dados);		
	}
		
		
		public function Registrar(){
		
			$this->load->view('cadastroUsuario');
		
	}
	
			public function Inserir(){
						
		$nome_cadastro = $_POST["nome_cadastro"];
		$sobrenome_cadastro = $_POST["sobrenome_cadastro"];
		$email_cadastro = $_POST["email_cadastro"];
		$senha_cadastro = $_POST["senha_cadastro"];
		
		
		$dados = array(
			
			'nome_cadastro' => $nome_cadastro,'email_cadastro' => $email_cadastro, 'senha_cadastro' =>$senha_cadastro,
		);		
			$this->load->view('receber',$dados);
				
		
			$this->load->view('funcaoInserir');
		
	}
}
