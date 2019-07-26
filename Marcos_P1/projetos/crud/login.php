<?php 
session_start();

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email=addslashes($_POST['email']);
	$senha=md5(addslashes($_POST['senha']));

	include 'conexao.php';

	$sql=$pdo->query("SELECT * FROM usuario WHERE email = '$email', senha='$senha'");

	if ($sql->rowCount() > 0 ) {
		


	}


}

?>

<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"/> <br/><br/>
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>
	<input type="submit" value="Entrar">

</form>