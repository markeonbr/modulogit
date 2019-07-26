<?php include 'conexao.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Básico</title>
	<link rel="stylesheet" type="text/css" href="estilo-crud.css">
</head>
<body>
	<div class="topo">
		<div class="adicionar">
		<div>
			<a href="adicionar.php">Adicionar Usuario </a>
		</div>
	</div>
	</div>
	<div class="centro">
		

<table border="1" >
	<tr>
		<td>Nome</td>
		<td>E-mail</td>
		<td>Senha Criptografada</td>
		<td>Ações</td>
	</tr>
<?php
	$sql = "SELECT * FROM usuario";
	$sql=$pdo->query($sql);
	if ($sql->rowCount() > 0) {

		foreach ($sql ->fetchAll() as $resultado) {
			echo '<tr>';
			echo '<td> '.$resultado['nome'].' </td>';
			echo '<td> '.$resultado['email'].' </td>';
			echo '<td> '.$resultado['senha'].' </td>';
			echo '<td> <a href="editar.php?id='.$resultado['id'].'"> <strong>Editar</strong>  </a> - <a href="excluir.php?id='.$resultado['id'].'"> <strong>Excluir</strong>  </a> </td>';
			echo '</tr>';
		}
	}
  ?>
</table>
	</div>

</body>
</html>