<?php 
	include('../config.php');

	$data = array();

	$nome = ucfirst($_POST['nome']);
	$idade = $_POST['idade'];
	$email = $_POST['email'];

	$sql = MySql::conectar()->prepare("SELECT email FROM cadastro WHERE email = ?");
	$sql->execute(array($email));
	$qtd = $sql->rowCount();

	if ($qtd == 1) {

		$data['contem'] = true;

	} else {

		$sql = MySql::conectar()->prepare("INSERT INTO `cadastro` VALUES (null,?,?,?);");
		if($sql->execute(array($nome,$idade,$email))){
			$data['sucesso'] = true;
		}else{
			$data['erro'] = true;
		}
	}

	die(json_encode($data));

?>