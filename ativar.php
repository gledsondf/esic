<h1>Ativar usuário para acesso ao e-sic</h1>
<?php 

include "config.php";

$usuario_id = $_REQUEST['idu'];
$senha = $_REQUEST['code'];

$sql = "UPDATE usuarios SET ativado='1'
		WHERE usuario_id='{$usuario_id}'
		AND senha = '{$senha}'";

$sql_duplaChecagem = "SELECT * FROM usuarios
					  WHERE usuario_id = '{$usuario_id}'
					  AND senha = '{$senha}'
					  AND ativado = '1'";

$sqlUpdate = $conexao->query($sql);
$duplaChecagem = $conexao->query($sql_duplaChecagem)->num_rows;

if ($duplaChecagem > 0) {


 	echo "
	<div class='acerto'>
 	<h3> Seu cadastro foi ativado com sucesso!</h3>
 	<p>Você pode fazer o login logo abaixo:</p>";			
	echo "</div>";
		include "formlogin.php";
}else {
	echo "<div class='erro'>";
	echo "<h3>usuário não ativado!</;h3>";
	echo "</div>";
}

?>
