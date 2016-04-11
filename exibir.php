<?php
	// referencias das páginas
	$pagina[1]="verificaUsuario.php";
	$pagina[2]="paginas/acessoInformacaoMundo.php";
	$pagina[3]="paginas/servicoInformacaoCidadao.php";
	$pagina[4]="paginas/esicManual.php";
	$pagina[5]="paginas/estatisticas.php";
	$pagina[6]="paginas/faleConosco.php";

	//referencias das páginas sistemas
	$pagina[10]="verificaUsuario.php";
	$pagina[11]="cadastroUsuario.php";
	$pagina[12]="formularioRecuperaSenha.php";
	$pagina[13]="geraNovaSenha.php";
	$pagina[14]="cadastrar.php";
	$pagina[15]="ativar.php";
	$pagina[16]="restrito.php";
	$pagina[17]="logout.php";
	$pagina[18]="cadastraSolicitacao.php";
/*	$pagina[2]="/paginas/acessoInformacaoMundo.php";
	$pagina[6]="/paginas/faleConosco.php";
	$pagina[7]="formularioRecuperaSenha.php";*/

 if (empty($_SERVER['QUERY_STRING'])) {
	require_once "/paginas/inicial.php";
}else{
	
	require_once "/".$pagina[$_GET["id"]];

}
?>