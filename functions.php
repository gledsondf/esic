<?php
//função para gerar senha randômica
	function makeRandomPassword(){

	    $salt = "abchefghjkmnpqrstuvwxyz0123456789";
	    srand((double)microtime()*1000000);
	    $i = 0;
	    $pass = 0;
	    while ($i <= 7){

	        $num = rand() % 33;
	        $tmp = substr($salt, $num, 1);
	        $pass = $pass . $tmp;
	        $i++;

	    }

	    return $pass;

	}

// função que verifica se a sessão iniciada da acesso à página.

function session_checker(){
	if (!isset($_SESSION['usuario_id'])) {
		header("Location:formularioLogin.php");
		exit();
	}
}


?>