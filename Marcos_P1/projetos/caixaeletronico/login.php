<?php 
session_start();
require 'conexao.php';
if (isset($_POST['agencia']) && !empty($_POST['agencia'])) {
	$agencia=addslashes($_POST['agencia']);
	$conta=addslashes($_POST['conta']);
	$senha=addslashes($_POST['senha']);

	$sql=$pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
	$sql->bindValue(":agencia", $agencia);		
	$sql->bindValue(":conta", $conta);
	$sql->bindValue(":senha", md5($senha));	
	$sql->execute();	

	if($sql->rowCount()>0){
		$sql = $sql->fetch();
		$_SESSION['banco'] = $sql['id'];
		header("Location: index.php");
		exit;
	}else{
		echo "<script type=\"text/javascript\">alert('Dados incorretos,em caso de bloqueio procure sua agência!');</script>";
	}

}

?>


<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="estilo_caixa.css">
	<script type="text/javascript" src="../../bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="../../bootstrap/bootstrap.min.js"></script>
	<title>Caixa Eletrônico</title>
	<meta charset="utf-8"/>
	<title>Caixa Eletrônico</title>
	<meta charset="utf-8"/>
</head>
<body>

	<div class="container">	
		<?php include "../../includes/menu.php"; ?>
		
		<center>
			<div class="titulo">
				<h1>Banco Fic</h1>
			</div>
			<div class="form">
				<form method="POST">
					Agência:<br/>
					<input type="text" name="agencia" autofocus="" autocomplete="off" /><br/><br/>

					Conta:<br/>
					<input type="text" name="conta" autocomplete="off"/><br/><br/>

					Senha:<br/>
					<input type="password" name="senha" autocomplete="off"/><br/><br/>

					<input type="submit" value="Entrar" class="btn btn-info">

				</form>
			</div>
		</center>
	</div>

</body>
</html>