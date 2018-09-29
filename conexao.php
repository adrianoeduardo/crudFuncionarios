<?php
	function conectarBD (){
		$link = mysqli_connect('localhost', 'root', '', 'bdfuncionarios');
		mysqli_set_charset($link, 'utf8');
		return $link;

	}
	function escaparDado ($dado) {
		$link = conectarBD();
		$dado = mysqli_real_escape_string ($link, $dado);
		fecharBD($link);
		return $dado;
	}
	function fecharBD ($link){
		mysqli_close($link);
	}

	
?>