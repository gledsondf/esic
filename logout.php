<h1>Sair - e-sic</h1>
<?php
session_start();

if (!isset($_REQUEST['logmeout'])) {
	echo "<div class='erro'><h3>Você deseja realmente sair?</h3>";
	echo "<ul class='listaFormulario'>
			<li>
				<span><a href=\"?id=17&logmeout\">Sim</a></span>
				<span>|</span>
				<span><a href=\"javascript:history.go(-1)\">Não</a></span>
			</li>
		</ul>
		</div>";
}
else{
	session_destroy();

	if (!isset($_SESSION['nome'])) {
		echo "<div class='erro'>
				<h3>Você não esta mais logado no sistema!</h3>
				</div>";
		include "formLogin.php";
	}
}

?>
