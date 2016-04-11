<h1>Recupera Senha- e-sic</h1>
<?php


$recupera = trim($_POST['recupera']);
$email =trim($_POST['email']);

switch ($recupera) {
	case "recupera":

		recupera_senha($email);
		break;
	
	default:

		include "recuperaSenhaform.php";
		break;
}

function recupera_senha($email){
include "config.php";
include "functions.php";
	if (!isset($email)) {
			echo "<div class='erro'><h3>Por favor preencha o campo com o seu e-mail utilizado no cadastro</h3></div>";
			include "recuperaSenhaform.php";
			exit();
		}	
		//checa se o e-mail informado é o cadastrado

		$sql_check = "SELECT * FROM usuarios
					  WHERE email='{$email}'";

		$sql_check_num = $conexao->query($sql_check)->num_rows;

		if ($sql_check_num == 0) {
			
			echo "<div class='erro'><h3>Este e-mail não está cadastado em nosso banco de dados!</h3></div>";
			include "recuperaSenhaform.php";
			exit();
		}
		//se ok gerar nova senha

	/*criar senha randômica*/
        
        
        $senha_randomica   =  makeRandomPassword();
        $senha = md5($senha_randomica);

        $msql = "UPDATE usuarios SET senha = '{$senha}'
        		 WHERE email = '{$email}'";

        $nsql = "SELECT nome FROM usuarios
        		WHERE email = '{$email}'";
        $nome = $conexao->query($nsql);		
        $query = $conexao->query($msql);

		$subject = "Confirme o cadastro para acesso ao e-sic - crefito11";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
		$headers.= "X-Priority: 1\r\n"; 
		$mensagem  = "
		<!DOCTYPE html>
		<html>
		<head>
		<title>Criação de nova senha do e-sic</title>
		<meta charset='utf-8' />
		</head>
		<body>
			<p>Olá, sua senha para acesso ao e-sic foi redefinida.</p>
			<p>Nova senha: {$senha_randomica} </p>
			<p>
				<a href='http://www.crefito11.org.br/esic/formularioLogin.php'>
				S	http://www.crefito11.org.br/esic/formularioLogin.php
	            </a>
            </p>
		</body>
		</html>

		";

        echo "<div class='acerto'><p>Sua nova senha foi gerada com sucesso e enviada para o seu e-mail- ( ".$email." ).</p>
        <p>Por favor, verifique seu e-mail.</p>";
		utf8_decode($mensagem);

		require_once('class/class.phpmailer.php'); //chama a classe de onde você a colocou.
		require_once('class/class.smtp.php');

		$mail = new PHPMailer(); // instancia a classe PHPMailer

		$mail->setLanguage('pt');
		$mail->IsSMTP();

		//configuração do gmail
		$mail->Port = '465'; //porta usada pelo gmail.
		$mail->Host = 'smtp.gmail.com'; 
		$mail->IsHTML(true); 
		$mail->Mailer = 'smtp'; 
		$mail->SMTPSecure = 'ssl';

		//configuração do usuário do gmail
		$mail->SMTPAuth = true; 
		$mail->Username = 'gledsondf@gmail.com'; // usuario gmail.   
		$mail->Password = 'silvernat123'; // senha do email.

		$mail->SingleTo = true; 

		// configuração do email a ver enviado.

		$mail->CharSet ='UTF-8';
		$mail->From = "gledsondf@gmail.com"; 
		$mail->FromName = "gledson"; 
		$mail->WordWrap = 70;

		$mail->addAddress($email); // email do destinatario.

		$mail->headers = $headers;
		$mail->Subject = $subject ; 
		$mail->Body = $mensagem;



		if(!$mail->Send())
		    echo "<div class='erro'><h3>Erro ao enviar Email:" . $mail->ErrorInfo."</h3></div>";
			echo "<div class='acerto'><h3>Redefinição de senha realizado com sucesso!</h3></div>";

			
}
?>
