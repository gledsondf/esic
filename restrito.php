<h1>Área Restrita de acesso - e-sic</h1>
<?php
include "functions.php";
session_start(); //inicia sessão

session_checker(); // chama a função que verifica se a sessão iniciada da acesso à página.


echo "<div class='acerto row'><p class='col-3quarto'>Bem vindo <strong>".$_SESSION['nome']."</strong></p>";


if($_SESSION['nivel_usuario'] == 0){

	echo "<p class='col-quarto'>permissão de acesso <strong>nível 0</strong></p>";
	echo "</div>";
	
	include "menuRestrito.php";

	echo "<div id='alteraCadastro' class='row col-col'>";
	include "formAlteraCadastro.php";
	echo "</div>";

	echo "<div id='alteraSenha' class='row col-col'>";
	include "formAlteraSenha.php";
	echo "</div>";

	echo "<div id='fazerSolicitacao' class= 'row col-col'>";
	include "formSolicitaInformacao.php";
	echo "</div>";

	echo "<div id='solicitacoesRealizadas' class= 'row col-col'>";
	include "formSolicitacoesRealizadas.php";
	echo "</div>";
}
	
if ($_SESSION['nivel_usuario'] ==1) {
	
	echo "<p class='col-quarto'>permissão de acesso <strong>nível 1</strong></p></div>";
}

	echo "<ul class='listaFormulario'>
			<li>
			<span><a href=\"?id=17\">Sair </a></span>
			</li>
		   </ul>";
?>
