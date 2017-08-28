<?php ob_start(); ?>

<h2>Bem vindo!</h2>

<p>
  Dirija-se a página "Formulário" para o cadastro de suas informações e realizar o cálculo INSS sobre o seu salário.
</p>

<?php
	$conteudo = ob_get_contents();
	ob_end_clean();
	$titulo = "Home";
	include "layout.php";
?>
