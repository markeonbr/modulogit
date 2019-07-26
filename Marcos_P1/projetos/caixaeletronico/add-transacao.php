<?php 
session_start();
require 'conexao.php';

if (isset($_POST['tipo']) && (isset($_POST['valor'])) && (!empty($_POST['valor']))   ) {
	$tipo = $_POST['tipo'];
	$valor = str_replace(",", ".", $_POST['valor']);
	$valor = floatval($valor);
	if ($valor < 0 || $valor > 1000000)  {
		echo "<script type=\"text/javascript\">alert('Valor da transação não está diposnível para sua conta, por favor consulte seu gerente. Por motivo de segurança sua sessão foi encerrada!');</script>";
		session_destroy();
		
		
	}else{

	$sql = $pdo -> prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
	$sql->bindValue(":id_conta", $_SESSION['banco']);
	$sql->bindValue(":tipo", $tipo);
	$sql->bindValue(":valor", $valor);
	$sql->execute();
	if ($tipo == '0') {
			//depostio
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();

	}else{
			//saque
		$sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();
	}

	header("Location: index.php");
	exit;


}
}

?>
<!DOCTYPE html>
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
</head>
<body>
	<div class="container">

		<form method="POST">
			<div class="col-sm-10">
				<br/>Tipo <br/>
				<select name="tipo" class="form-control">
					<option value="0">Depósito</option>
					<option value="1">Retirada</option>
				</select><br/><br/>
				Valor: <br/>
				<input class="form-control" type="text" name="valor" pattern="[0-9.,]{1,}" autofocus=""><br/><br/>
				<input type="submit" value="Adicionar" class="btn btn-success">
				<a href="index.php" class="btn btn-danger"> Voltar</a>
			</div>
		</form>

	</div>

</body>
</html>