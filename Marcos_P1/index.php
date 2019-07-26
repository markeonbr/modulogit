<!DOCTYPE html>
<html>
<head>
	<meta property="og:url" content="http://markeon.orgfree.com/"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Dev.Marcos"/>
	<meta property="og:description" content="Uma prévia do meu trabalho."/>
	<meta property="og:image" content="img/imgmeta.jpg"/>
	<meta charset="utf-8"/>
	<title>Dev.Marcos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" >
		<div class="topo" >

			<div id="logo">
				<div id="img">
					<a href="http://localhost/Marcos_P1/index.php"> <img src="img/marcos2.png" class="img-responsive img-circle"/> </a>
				</div>
				<div id="nome">
					<h3>Marcos Felipe<br/>
						<small><i>Desenvolvedor Web</i></small>
					</h3>
				</div>
			</div>
			<div class="dropdown" id="menu">
				<a href="index.php"><button class="btn" id="btn-menu" style="color:black;">Home</button></a>
				
				<button class="btn dropdown-toggle " data-toggle="dropdown" id="btn-menu">
					Menu &nbsp<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" id="listamenu">
					
					<li class="dropdown-header">Linguagens de programação</li>
					<li><a href="http://localhost/Marcos_P1/projetos/projetos.php" target="_blank">Projetos</a></li>
					<li class="divider"></li>
					<li class="disabled"><a href="">JAVA (EM BREVE)</a></li>
					<li class="disabled"><a href="">JS (EM BREVE)</a></li>
					<li class="disabled"><a href="">JSP (EM BREVE)</a></li>
					<li class="disabled"><a href="">DESABILITADO</a></li>
				</ul>
			</div>
		</div>

		<div class="jumbotron">
			<h1>Portfólio </h1>
			<p>
				Fazer um texto de apresentação.
				Quem sou, oq gosto, tecnologia q uso,onde estudo, oq estudo, pq faço isso
			</p>
		</div>	
		<div class="frase">	
			<blockquote class="blockquote">
				Nunca deixe ninguém te dizer que não pode fazer alguma coisa. Se você tem um sonho tem que correr atrás dele. As pessoas não conseguem vencer e dizem que você também não vai vencer. Se você quer uma coisa corre atrás. 
				<footer>À Procura da Felicidade</footer>
			</blockquote>	
		</div>
		<br>
		<p>Para fazer uma citação no BootStrap, use <code>Blockquot</code> e também <code>Footer</code></p>
		<p>Para Salvar, apete <kbd>ctrl + s</kbd></p>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th>NOME</th>
				<th>SOBRENOME</th>
			</tr>
			<tr>
				<td class="success">Marcos</td>
				<td class="danger">Felipe</td>
			</tr>
			<tr>
				<td class="danger">Marcos</td>
				<td class="success">Felipe</td>
			</tr>
			<tr class="success">
				<td>Marcos</td>
				<td>Felipe</td>
			</tr>
		</table>
		<button class="btn btn-danger">DANGER</button><br/><br/>
		<button class="btn btn-success">SUCCESS</button> <br/><br/>
		<button class="btn btn-info">INFO</button><br/><br/>
		<button class="btn btn-defaut">DEFAUT</button><br/><br/>
		<button class="btn btn-primary">PRIMARY</button><br/><br/>
		<button class="btn btn-danger btn-lg">Excluir / Largo</button><br/><br/>
		<button class="btn btn-danger btn-block">Excluir Responsivo</button><br/><br/>
		<button class="btn btn-danger btn-block disabled">Excluir Responsivo BLOQUEADO</button><br/><br/>
		<button class="btn btn-danger btn-block disabled btn-link">Excluir Responsivo BLOQUEADO</button><br/><br/>
		<br>
		<h3>Botão <small>Agrupando botões</small></h3>
		<div class="btn-group">
			<button class="btn btn-primary">1</button>
			<button class="btn btn-primary">2</button>
			<button class="btn btn-primary">3</button>
			<button class="btn btn-primary">4</button>
			<br/><br/>
			<button class="btn btn-danger">DANGER</button>
			<button class="btn btn-success">SUCCESS</button> 
			<button class="btn btn-info">INFO</button>
			<button class="btn btn-defaut">DEFAUT</button>
			<button class="btn btn-primary">PRIMARY</button>
		</div>
		<br/><br/>
		<div class="btn-group btn-group-justified ">
			<a class="btn btn-primary">1</a>
			<a class="btn btn-primary">2</a>
			<a class="btn btn-primary">3</a>
			<a class="btn btn-primary">4</a>	
		</div>
		<br/><br/>
		<div class="btn-group-vertical ">
			<button class="btn btn-danger">DANGER</button>
			<button class="btn btn-success">SUCCESS</button> 
			<button class="btn btn-info">INFO</button>
			<button class="btn btn-defaut">DEFAUT</button>
		</div>
	</div>
</body>
</html>