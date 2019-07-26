<?php 
session_start();
require 'conexao.php';
if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
	$id=$_SESSION['banco'];
	$sql=$pdo->prepare("SELECT * FROM contas WHERE id =:id");
	$sql->bindValue(":id", $id);
	$sql->execute();
	if ($sql->rowCount()>0) {
		$info = $sql->fetch();

	}else{
		header("Location: login.php");
		exit;

	}

}else{
	header("Location: login.php");
	exit;
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
</head>
<body>
<?php include "../../includes/menu.php";?>
	<div class="container">
		
		<div class="titulo">
			<center>
				<h1>Banc Fic <img src="https://render.fineartamerica.com/images/rendered/medium/print/images-medium-5/happy-leo-cartoon-lion-vector-cute-character-kids-funny-illustration-lion-funny-mascot-usagi-d.jpg" width="70" height="70"> <br/>
					<small> <investimento>investimento é aqui!
					</investimento></small>
				</h1>
			</center>
		</div>
		<div class="info">	
			<h4>Titular: <small><strong><?php echo $info['titular'];?></strong></small></h4> 
			<h4>Agência: <small><strong><?php echo $info['agencia'];?></strong></small></h4> 
			<h4>Conta:   <small><strong><?php echo $info['conta'];?></strong></small></h4> 
			<h4>Saldo:   <small><u><strong><?php echo $info['saldo'];?></strong></u></small></h4> 
			<div class="btn-group btn-group-justified ">
				<a href="add-transacao.php" class="btn btn-success">Transação</a>
				<a href="sair.php" id="sair" class="btn btn-danger">Sair</a>	
			</div>
		</div>
		<hr/>
		<h2>Movimentação/Extrato </h2><br/>
		<div class="tiger">
			<img src="https://media.giphy.com/media/3oi7S44oxuUe917JXk/giphy.gif" width="60" height="60" >
		</div>
		<form method="POST" action="index.php">
			<input class="btn btn-info" name="filter" type="submit" value="Inverter Ordem"> 
		</form>
		
		<table border="1" class="table table-striped table-bordered table-hover">
			<tr>
				<th>Data</th>
				<th>Hora</th>
				<th>Valor</th>
			</tr>
			<?php
			if(isset($_POST['submit'])){
				$sql=$pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
			}
			$sql=$pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta ORDER BY data_operacao DESC");
			$sql->bindValue(":id_conta",$id);
			$sql->execute();

			if ($sql->rowCount()>0) {
				foreach ($sql->fetchAll() as $item) {
					?>
					<tr>
						<td>	<?php echo date('d/m/Y', strtotime($item['data_operacao']))?></td>
						<td>    <?php echo date('H:i', strtotime($item['data_operacao']))?>	</td>
						<td>
							<?php if($item['tipo'] == '0'): ?>
								<font color="green"> R$ <?php echo $item['valor'] ?></font>
								<?php else: ?>
									<font color="red"> R$ <?php echo $item['valor'] ?></font>
								<?php endif; ?>	
							</tr>

							<?php

						}
					}


					?>

				</table>

			</div>
		</body>
		</html>