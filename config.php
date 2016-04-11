<?php 
define('HOST', 'localhost');
define('BD_USER', 'root');
define('BD_PASS', '');
define('BD_NAME', 'crefito11_esic');

/*maneira antiga*/
/*mysql_connect('localhost',BD_USER,BD_PASS);*/

/*nova maneira*/
/* conectar-se ao banco de dados MYSQL*/
$conexao = new mysqli(HOST,BD_USER,BD_PASS,BD_NAME);

//caso algo tenha dado errado


if (!$conexao) {
	die("Connection error: " . mysqli_connect_error());
}


//evitar caracteres estranhos no banco

$sql1 ="SET NAMES 'utf-8'";
$sql2 = "SET character_set_connection=utf8";
$sql3 = "SET character_set_client=utf8";
$sql4 = "SET character_set_results=utf8";


$ativa1= $conexao->query($sql1);
$ativa2= $conexao->query($sql2);
$ativa3= $conexao->query($sql3);
$ativa4= $conexao->query($sql4);
header('Content-Type: text/html; charset=utf-8');
?>