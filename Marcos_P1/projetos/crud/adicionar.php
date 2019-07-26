<?php
include 'conexao.php';

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome=addslashes($_POST['nome']);
	$email=addslashes($_POST['email']);
	$senha=md5(addslashes($_POST['senha']));

	$sql="INSERT INTO usuario SET nome='$nome',email='$email',senha='$senha'";
	$pdo->query($sql);

	header("Location: index.php");

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Adicionar</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="estilo-crud.css">
</head>
<body>
	<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"/><br/><br/>
	E-mail: <br/>
	<input type="email" name="email"/><br/><br/>
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>
	<input type="submit" value="Adicionar" id="botaoadd" /><br/>
</form>

</body>
</html>