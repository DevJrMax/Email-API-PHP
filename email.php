
<?php
	require 'PHPMailerAutoload.php'; //chama a classe de onde você a colocou.

	$mail = new PHPMailer(); // instancia a classe PHPMailer

	$mail->IsSMTP();//configuração do gmail
	$mail->Port = '465'; //porta usada pelo gmail.
	$mail->Host = 'smtp.gmail.com'; 
	$mail->IsHTML(true); 
	$mail->Mailer = 'smtp'; 
	$mail->SMTPSecure = 'ssl';
	//configuração do usuário do gmail
	$mail->SMTPAuth = true; 
	$mail->Username = 'a@gmail.com'; // usuario gmail.   
	$mail->Password = 'senha'; // senha do email.

	$mail->SingleTo = true; 

	// configuração do email a ver enviado.
	$mail->From = "sbibsys@gmail.com"; 
	$mail->FromName = "SISTEMA BiBSyS"; 

	$mail->addAddress("fjuninhomax@gmail.com"); // email do destinatario.

	$mail->Subject = "TESTE EMAIL"; 
	$mail->Body = "VAI DAR CERTO";

	if(!$mail->Send()){
		echo "Erro ao enviar Email:" . $mail->ErrorInfo;
	}
?>
