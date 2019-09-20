<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=Web2", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Professor.php';
	$professor = new Professor();
	$professor->setSiape($_POST['siape']);
	try {
		$sql = "DELETE FROM professor WHERE	siape = ('" . $professor->getSiape() . "')";

		$pdo->exec($sql);
		echo "<p>Deletado com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
?>