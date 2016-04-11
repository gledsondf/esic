<h1>Verifica usuário</h1>
<?php
 session_start(); //inicia sessão

include "config.php";

$cpfcnpj = trim($_POST['cpfcnpj']);
$senha = trim($_POST['senha']);




if ((!$cpfcnpj) || (!$senha)) {
	
	echo "<div class='erro'>";
	echo "<h3>Por favor, todos os campos devem ser preenchidos!</h3>";
	echo "</div>";

	include "formlogin.php";
}
else {
	$senha = md5($senha);

	$sql = "SELECT * FROM usuarios
			WHERE cpfcnpj = '{$cpfcnpj}'
			AND senha = '{$senha}'
			AND ativado = '1'";

	$login_check = $conexao->query($sql)->num_rows;

	if ($login_check > 0) {
		while ($rows = $conexao->query($sql)->fetch_array(MYSQLI_ASSOC)) {

			foreach ($rows as $key => $val) {
				
				$$key = stripcslashes($val);

				echo $key;
			}

			$_SESSION['usuario_id'] = $usuario_id;
			$_SESSION['nome'] = $nome;
			$_SESSION['cpfcnpj'] = $cpfcnpj;
			$_SESSION['email'] = $email;
			$_SESSION['nivel_usuario'] = $nivel_usuario;
			$msql = "UPDATE usuarios SET data_ultimo_login = now()
					 WHERE usuario_id = '{$usuario_id}'";
			$sqldataloginultimoaltera = $conexao->query($msql);		 
			header("Location: ?id=16");

		}
	}
	else {

		echo "<div class='erro'>";
		echo "<h3>Você não pode logar-se! Este usuário e/ou  senha não são válidos!</h3>
			  <p>Por favor tente novamente!</p>";
		echo "</div>";

		include "formlogin.php";

	}







}


?>
