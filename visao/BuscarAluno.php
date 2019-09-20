<html>
	<head>
		<title>Atividade 1 de Web 2</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<?php include("../layout/cabecalho.html"); ?>
			<div class="row">
				<?php include("../layout/menu.html") ?>
				<div class="col-md-9">
					<form action="../repositorio/ExibirAluno.php" method="POST"> 
						<label>Ra do aluno a ser buscado(caso for buscar por ra): </label><input class="form-control" type="text" name="ra" id="raID"/> 
						<p id="msgIdade"></p>
						<input class="btn btn-primary" type="submit" value="Buscar Alunos" />
						<input class="btn btn-primary" type="submit" value="Buscar por RA" />
					</form>
				</div>
			</div>
			<?php include("../layout/rodape.html"); ?>
		</div>	
	</body>
</html>