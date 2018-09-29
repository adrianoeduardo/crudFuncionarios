<?php
	require_once 'conexao.php';

	function executarQuery ($query) {
		$link = conectarBD();
		$res = mysqli_query($link, $query);
		return $res;
	}
	function lerDados ($id){
		if ($id == ""){
			$query = "SELECT * FROM pessoas JOIN funcoes ON funcao = cod_funcao";
		}else {
			$query = "SELECT * FROM pessoas WHERE id=".$id;
		}
		$res = executarQuery($query);
		return $res;		
	}
	function excluirDados ($id){
		$query = "DELETE FROM pessoas WHERE id =".$id;
		$res = executarQuery($query);
		if (!$res){
			$msg =  " <div class='alert alert-danger'> Erro ao Excluir, tente novamente mais tarde </div>";
		}else {
			$msg =  " <div class='alert alert-success'> O (a) funcionário (a) foi excluído com sucesso! </div>";
		}
		return $msg;
	}
	function lerFuncoes (){
		$query = "SELECT * FROM funcoes";
		$res = executarQuery($query);
		return $res;
	}
	function addFuncionario($nome, $telefone, $cpf, $funcao){
		$query = "INSERT INTO pessoas VALUES (default, '".$nome."', '".$telefone."', '".$cpf."', '".$funcao."')";
		$res = executarQuery($query);
		if (!$res){
			$msg = " <div class='alert alert-danger'> Não foi possível fazer o cadastro do novo funcionário. Por Favor tente novamente mais tarde </div>";
		}else{
			$msg = " <div class='alert alert-success'> Funcionário Cadastrado com sucesso! </div>";	
		}
		return $msg;
	}
	function editarFuncionario ($id, $nome, $telefone, $cpf, $funcao ) {
		$query = "UPDATE pessoas SET nome ='".$nome."' , telefone ='".$telefone."', cpf ='".$cpf."' , funcao ='".$funcao."' WHERE id = '".$id."'";
		
		$res = executarQuery($query);
		if (!$res){
			$msg = " <div class='alert alert-danger'> Não foi possível fazer as alterações. Por Favor tente novamente mais tarde </div>";
		}else{
			$msg = " <div class='alert alert-success'> Alterações feitas com sucesso! </div>";	
		}
		return $msg;
	}

?>

