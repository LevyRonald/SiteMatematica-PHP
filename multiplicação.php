<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Multiplicação</title>
	<link rel="stylesheet" type="text/css" href="multiplicação.css">
	<?php
	if ($_POST) {
	$n1 = $_POST['valor1'];
	$n2 = $_POST['valor2'];
	$soma = $n1 * $n2;
	$resultado = $soma;
	}
	 ?>
</head>
<body>
	<nav>
		<a href=""><h1>Calculadora Rápida</h1></a>
	</nav>

	<div class="cont">
	<form method="post">
		<h1>Multiplicação</h1>
		<p class="Valor 1">
			<input type="text" name="valor1" placeholder="Digite um valor" required="required"  id="n1">
		</p>
		<p class="Valor 2">
			<input type="text" name="valor2" placeholder="Digite um valor" required="required" id="n2">
		</p>
		<p class="enviar">
			<input type="submit" name="somar" value="multiplicar" onclick="">
		</p>
		<p class="Resultado">
			<input type="number" name="Resultado" placeholder="resultado" id="Result" value="<?php echo $resultado ?>">
		</p>
		<p class="enviar">
			<a href="home.php">Voltar</a>
		</p>
	</div>
	</form>



</body>
</html>