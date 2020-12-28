<?php 

	date_default_timezone_set('America/Sao_Paulo');
    
	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/Form_dinamico/'); //Diretório Raiz do site

	// INFORMAÇÕES PARA O BANCO DE DADOS
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','form_dinamico');
	define('NOME_EMPRESA','MultipliqueX');

?>
