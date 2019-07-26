<?php

	try{
		$pdo = new PDO("mysql:dbname=caixaeletronico;host=localhost","root","");
		

	}catch(PDOException $e){
		echo "ERRO: ".$e->getMessage();
		exit;
	}

?>