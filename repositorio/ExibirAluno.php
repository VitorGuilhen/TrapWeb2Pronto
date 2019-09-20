<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=Web2", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Aluno.php';
	$aluno = new Aluno();
	$aluno->setRa($_POST['ra']);
	if($aluno->getRa() == ""){
	try {
		$sql = "SELECT * FROM aluno";

		$tamanho = $pdo->query($sql);

		echo "<p>Selecionado com sucesso.</p>";
		if ($tamanho->rowCount() > 0) {

			echo "<table>";
			echo "<tr>";
			echo "<th> Nome</th>";
			echo "<th> Idade</th>";
			echo "<th> Cpf</th>";
			echo "<th> Sexo</th>";
			echo "<th> RA</th>";
			echo "</tr>";
			while ($row = $tamanho->fetch()) {
				echo "<tr>";
				echo "<td>" . $row['nome'] . "</td>";
				echo "<td>" . $row['idade'] . "</td>";
				echo "<td>" . $row['cpf'] . "</td>";
				echo "<td>" . $row['sexo'] . "</td>";
				echo "<td>" . $row['ra'] . "</td>";
			}
		}
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());		
	}
		}
		else {
		try {
		$sql = "SELECT * FROM aluno WHERE ra = ('" . $aluno->getRa() . "')";

		$tamanho = $pdo->query($sql);

		echo "<p>Selecionado com sucesso.</p>";
		if ($tamanho->rowCount() > 0) {

			echo "<table>";
			echo "<tr>";
			echo "<th> Nome</th>";
			echo "<th> Idade</th>";
			echo "<th> Cpf</th>";
			echo "<th> Sexo</th>";
			echo "<th> RA</th>";
			echo "</tr>";
			while ($row = $tamanho->fetch()) {
				echo "<tr>";
				echo "<td>" . $row['nome'] . "</td>";
				echo "<td>" . $row['idade'] . "</td>";
				echo "<td>" . $row['cpf'] . "</td>";
				echo "<td>" . $row['sexo'] . "</td>";
				echo "<td>" . $row['ra'] . "</td>";
			}
		}
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
?>