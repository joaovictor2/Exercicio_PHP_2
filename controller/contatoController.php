<?php
	header('Content-Type: text/html; charset=UTF-8');
	date_default_timezone_set('America/Sao_Paulo');

	require_once "PHPMailer/PHPMailerAutoload.php";

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$salario = $_POST["salario"];

	//calculoINSS
	$INSS = (8 / 100) * $salario;

	//pegar hora
	$hr = date("H");

	if($hr >= 6 && $hr < 12) {
		$resp = "Bom dia";
	}
	if($hr >= 12 && $hr < 18) {
		$resp = "Boa tarde";
	}
	if(($hr >= 18 && $hr != 0) || ($hr >= 0 && $hr < 6)) {
		$resp = "Boa noite";
	}

	//mensagem
	$mensagem = "$resp. A aliquota do INSS corresponde a R$" . number_format($INSS, "2", ",", ".") . " do seu salário.";

	$assunto = "Resultado INSS";

	//Lógica de envio
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "587";
	$mail->Username = "unipamphp2017@gmail.com";
	$mail->Password = "unipam2017";
	$mail->SMTPSecure = "tls";

	$mail->SMTPOptions = array("ssl" => array("verify_peer" => false, "veirfy_peer_name" => false, "allow_self_signed" => true));

	$mail->setFrom("unipamphp2017@gmail.com", "Admin");
	$mail->addAddress($email);
	$mail->Subject = $assunto;
	$mail->Body = $mensagem;

	$mail->isHTML(true);

	$enviado = $mail->send();

	if($enviado == true) {
		echo "Obrigado Sr.(a) $nome por usar nosso formulário.";
	}else {
		echo "Houve um erro ao enviar: " . $mail->ErrorInfo;
	}
?>
