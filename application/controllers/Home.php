<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

if (!isset($_SESSION['nper'],$_SESSION['nacertos'])){
	$_SESSION['nper']=0;
	$_SESSION['nacertos']=0;
}
class Home extends CI_Controller {

	var $perguntas= array(
		array('Qual a idade do Gabriel?', 20, 19,28,10),
		array('Qual a altura do Gabriel em metros?', 1.60, 1.63,1.65,1.50),
		array('Qual o peso do Gabriel em Kg?', 63, 58,68,20),
		array('Qual a cor preferida do Gabriel?', 'Preto', 'Prata', 'Vermelho', 'Dourado')
	);

	public function index()
	{
		// session_unset();
		$dados['perguntas']=$this->perguntas;
		$this->load->helper('url');
		$this->load->view('header.php');
		$this->load->view('view_home.php',$dados);
		$this->load->view('footer.php');
		
	}

}
