<h1>Área Restrita de acesso - e-sic</h1>
<?php
 include "config.php";
 include "functions.php";

$solicitacao = $_POST['solicitacao'];
$formaretorno = $_POST['formaretorno'];


if ((!$solicitacao)||(!$formaretorno)) {
	echo "<div class='erro'>";

    if (!$solicitacao){
 
        echo "<h3>solicitacao é requerido</h3>";
 
    }
 
    if (!$formaretorno){
 
        echo "<h3>CPF/forma de retorno é requerido</h3>";
 
    }
    echo "</div>";

    include "formSolicitaInformacao.php";
}
else {

	 $solicitacao = htmlspecialchars($solicitacao);


	 $sqlInserirInformacao = "INSERT INTO solicitacaotabela
	 							(solicitacao,formaretorno,data_solicitacao)
	 						  VALUES ('$solicitacao','$formaretorno',now())
	 							";
	$query = $conexao->query($sqlInserirInformacao); 	
	
	if ($query) {
			echo "<div class='acerto'><h3>Cadastro Realizado com Sucesso!</h3></div>";

	}else{
    echo "<div class='erro'>";
	echo "<h3>falha ao incluir os dados para o seu cadastro, por favor entrar em contato e informar o problema</h3>";
    echo "</div>";
	}						

}
?>
