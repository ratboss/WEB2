<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de hora extra</title>
	<style>
		* {
			margin: 0%;
			padding: 0%;
		}
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
		.container {
			margin-left: 325px;
			width: 50%;
			max-width: 800px;
			background-color: pink;
			padding: 20px;
			margin-top: 100px;
		}
		h1, h2 {
			text-align: center;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		label {
			margin-top: 10px;
		}
		input[type="submit"] {
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<a href="login.php">Voltar</a>
		<h1>Calculadora de hora extra</h1>
		<form method="post">
			<label for="salario_bruto">Salário bruto:</label>
			<input type="number" name="salario_bruto" id="salario_bruto" required>
			<label for="carga_horaria_mensal">Carga horária mensal:</label>
			<input type="number" name="carga_horaria_mensal" id="carga_horaria_mensal" required>
			<label for="porcentagem_hora_extra">Porcentagem da hora extra:</label>
			<input type="number" name="porcentagem_hora_extra" id="porcentagem_hora_extra" required>
			<label for="quantidade_horas_extra">Quantidade de horas extras:</label>
			<input type="number" name="quantidade_horas_extra" id="quantidade_horas_extra" required>
			<input type="submit" value="Calcular">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$salario_bruto = $_POST["salario_bruto"];
				$carga_horaria_mensal = $_POST["carga_horaria_mensal"];
				$porcentagem_hora_extra = $_POST["porcentagem_hora_extra"];
				$quantidade_horas_extra = $_POST["quantidade_horas_extra"];
				$valor_hora = $salario_bruto / $carga_horaria_mensal;

				if($porcentagem_hora_extra == 50){
					$valor_hora_extra = $quantidade_horas_extra * ($valor_hora * 1.5);
					echo "<h2>Resultado:</h2>"."<br>";
					echo "Salário bruto: R$". number_format($salario_bruto)."<br>";
					echo "Carga horária mensal: ". $carga_horaria_mensal."<br>";
					echo "Salário hora: R$". number_format($valor_hora)."<br>";
					echo "Porcentagem das horas extras: ". $porcentagem_hora_extra."%"."<br>";
					echo "Quantidade de horas extras: ". $quantidade_horas_extra."<br>";
					echo "Valor das horas extras: R$". number_format($valor_hora_extra)."<br>";
				}
				if($porcentagem_hora_extra == 100){
					$valor_hora_extra = $valor_hora * 2;
					$vextra = $valor_hora_extra * $quantidade_horas_extra;
					echo "<h2>Resultado:</h2>"."<br>";
					echo "Salário bruto: R$". number_format($salario_bruto)."<br>";
					echo "Carga horária mensal: ". $carga_horaria_mensal."<br>";
					echo "Salário hora: R$". number_format($valor_hora)."<br>";
					echo "Porcentagem das horas extras: ". $porcentagem_hora_extra."%"."<br>";
					echo "Quantidade de horas extras: ". $quantidade_horas_extra."<br>";
					echo "Valor das horas extras: R$". number_format($vextra)."<br>";
				}
            }
        ?>
</div>
</body>
</html>