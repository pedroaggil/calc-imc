<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Seu IMC</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<div class="center"><br>
<?php 

	// informações para o cálculo do imc
	$genero = $_POST["calc_imc"]?$_POST["calc_imc"]:false;
	$peso = $_POST["peso"]?$_POST["peso"]:0;
	$altura = $_POST["altura"]?$_POST["altura"]:0;

	// cálculo do imc: peso * altura²
	$height = ($altura / 100) * ($altura / 100);
	$imc = $peso / $height;

	if ($genero = "masculino") {		
		if ($imc < 20) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente abaixo do peso ideal.";
		} elseif ($imc >= 20 && $imc <= 25) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente em <span>estado de eutrofia</span> (peso ideal).";
		} elseif ($imc >= 25 && $imc <= 30) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente um <span>pouco acima do peso</span> ideal (pré obesidade, ou obesidade grau I).";
		} elseif ($imc >= 30 && $imc <= 40) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente <span>acima do peso</span> ideal (obesidade grau II).";
		} elseif ($imc > 40) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente <span>muito acima</span> do peso ideal (obesidade grau III, grave).";
		}		

	} elseif ($genero = "feminino") {		
		if ($imc < 19) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente <span>abaixo do 
				peso</span> ideal.";
		} elseif ($imc >= 19 && $imc <= 24) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente em <span>estado de 
				eutrofia</span> (peso ideal).";
		} elseif ($imc >= 24 && $imc <= 29) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente um <span>pouco acima 
				do peso</span> ideal (pré obesidade, ou obesidade grau I).";
		} elseif ($imc >= 29 && $imc <= 39) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente <span>acima do 
				peso</span> ideal (obesidade grau II).";
		} elseif ($imc > 39) {
				echo "Seu IMC é <span>" . number_format($imc) . "</span> kg/m² e você está atualmente <span>muito acima do 
				peso</span> ideal (obesidade grau III, grave).";
		}

	} else {
		echo "Apesar de eu estar extremamente indignado pelo fato de você não ter identificado seu gênero, saiba que o 
		seu IMC é <span>" . number_format($imc) . "</span> kg/m².";
	}
	echo "<br><br><button class='button' onclick='goBack()'>Voltar</button><br>"
 ?>
 <br>
</div>
</div><br>
	<footer>
		&copy; 2020 &middot; Pedro Gil &middot; LP
	</footer>

 <script type="text/javascript">
 	function goBack() {
 		window.history.go(-1);
 	}
 </script>
</body>
</html>