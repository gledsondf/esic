<h1>Cadastra usuário</h1>

<?php
 include "config.php";
 include "functions.php";
$tipopessoa = $_POST['tipopessoa'];
$nome = $_POST['nome'];
$cpfcnpj = $_POST['cpfcnpj'];
$idfaixaetaria = $_POST['idfaixaetaria'];
$idescolaridade = $_POST['idescolaridade'];
$profissao = $_POST['profissao'];
$idtipotelefone = $_POST['idtipotelefone'];
$dddtelefone = $_POST['dddtelefone'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$confirmeemail = $_POST['confirmeemail'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


if ((!$nome)||(!$cpfcnpj)||(!$email)||(!$confirmeemail)) {

	echo "<div class='erro'>";


    if (!$nome){
 
        echo "<h3>Nome é requerido</h3>";
 
    }
 
    if (!$cpfcnpj){
 
        echo "<h3>CPF/CNPJ é requerido</h3>";
 
    }
 
    if (!$email){
 
        echo "<h3>Email é um campo requerido.</h3>";
 
    }
 
    if (!$confirmeemail){
 
        echo "<h3>Confirmar e-mail é requerido.</h3>";
 
    }
    
    echo "<p>preencha os campos abaixo:</p>";
    echo "</div>";

    include "formCadastro.php";
}
else{

	//checar se o nome e/ou email já existem no banco de dados
    /* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */
 
    $sql_nome_check = $conexao->query("SELECT COUNT(usuario_id) FROM usuarios WHERE nome='{$nome}'");

    $sql_cpfcnpj_check = $conexao->query("SELECT COUNT(usuario_id) FROM usuarios WHERE cpfcnpj='{$cpfcnpj}'");

    $sql_email_check = $conexao->query("SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'");
 
    $nReg = $sql_nome_check->fetch_array();
	$cReg = $sql_cpfcnpj_check->fetch_array();
    $eReg = $sql_email_check->fetch_array();
 
    $nome_check = $nReg[0];
    $cpfcnpj_check = $cReg[0];
    $email_check = $eReg[0];
 
    if (($nome_check > 0) || ($cpfcnpj_check > 0) || ($email_check > 0)){
 
       echo "<div class='erro'>";
 
        if ($nome_check > 0){
 
            echo "<h3>Este nome de usuário já está sendo utilizado.</h3>";
 
            unset($nome);
 
        }
 
        if ($cpfcnpj_check > 0){
 
            echo "<h3>Este CPF/CNPJ já está sendo utilizado.</h3>";
 
            unset($cpfcnpj);
 
        } 

        if ($email_check > 0){
 
            echo "<h3>Este email já está sendo utilizado.</h3>";
 
            unset($email);
 
        }
 		echo "</div>";
        include "formCadastro.php"; 
		
}
else {
	
	/*criar senha randômica*/
       
        
        $senha_randomica   =  makeRandomPassword();
        $senha = md5($senha_randomica);

/*inserindo dados no banco de dados*/

	$sql = "INSERT INTO usuarios
	        (senha, nome, cpfcnpj, idfaixaetaria, idescolaridade, profissao, idtipotelefone, dddtelefone, telefone, email, confirmeemail, endereco, cep, bairro, cidade, uf, numero, complemento,data_cadastro)
	        VALUES
	         ('$senha', '$nome', '$cpfcnpj', '$idfaixaetaria', '$idescolaridade', '$profissao', '$idtipotelefone', '$dddtelefone', '$telefone', '$email', '$confirmeemail', '$endereco', 'cep', '$bairro', '$cidade', '$uf', '$numero', '$complemento', now())";

	$query = $conexao ->query($sql);

	if($query){
$usuario_id = $conexao->insert_id;
$subject = "Confirme o cadastro para acesso ao e-sic - crefito11";
$headers = "MIME-Version: 1.0\r\n"; 
$headers.= "Content-Type: text/plain; charset=utf-8\r\n"; 
$headers.= "X-Priority: 1\r\n"; 
$mensagem  = "
			<!DOCTYPE html>
			<html>
			<head>
			<title>confirmação de cadastro</title>
			<meta charset='utf-8' />
			</head>
			<body>
			Prezado  {$nome},<br />
            Obrigado pelo seu cadastro no e-sic.<br /> <br /> 
 
            Para confirmar seu cadastro e ativar sua conta em nosso sistema,por favor clique no link abaixo ou copie e cole na barra de
            endereço do seu navegador.<br /> <br />
 
            <a href='http://www.crefito11.org.br/esic/?id=15&idu={$usuario_id}&code={$senha}'>
            http://www.crefito11.org.br/esic/?id=15&idu={$usuario_id}&code={$senha}
            </a>
 
            <br /> <br />
            Após a ativação de sua conta, você poderá ter acesso ao login com os seguintes dados abaixo:<br > <br /> 
 
            <strong>Usuario</strong>: {$cpfcnpj}<br />
            <strong>Senha</strong>: {$senha_randomica}<br /> <br />
 
            Obrigado!<br /> <br /> 
 			
            Webmaster<br /> <br /> <br />
            Esta é uma mensagem automática, por favor não responda!
            </body>
            </html>";
            echo "
            <div class='acerto'>
            <p>Foi enviado para seu email - ( ".$email." ) um pedido de
            confirmação de cadastro, por favor verifique e sigas as instruções!</p>
            </div>";
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
    echo "Erro ao enviar Email:" . $mail->ErrorInfo;
    echo "<div class='acerto'>";
		echo "<h3>cadastro realizado com sucesso!</h3>";

	}else{
    echo "<div class='erro'>";
	echo "<h3>falha ao incluir os dados para o seu cadastro, por favor entrar em contato e informar o problema</h3>";
    echo "'</div>";
	}

}

}



?>
