<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
       
        <title>Cadastro de Funcionários</title>
        <link rel="stylesheet" href="lib/bootstrap.css">
        
    </head>
    <body>
        <?php 
        	require_once 'crud.php';
        	require_once 'conexao.php';

        	$id = isset($_POST['id'])?$_POST['id']: "";
        	$nome = isset($_POST['nome'])?$_POST['nome']: "";
        	$telefone = isset($_POST['telefone'])?$_POST['telefone']: "";
        	$cpf = isset($_POST['cpf'])?$_POST['cpf']: "";
        	$funcao = isset($_POST['funcao'])?$_POST['funcao']: "";

        	$nome = escaparDado($nome);
        	$telefone = escaparDado($telefone);
        	$cpf = escaparDado($cpf);
        	
        	if ($id == ""){
        		$res = addFuncionario($nome, $telefone, $cpf, $funcao);
        		echo $res;
        	}else {
        		$res = editarFuncionario($id, $nome, $telefone, $cpf, $funcao);
        		echo $res;

                //teste de upload no git 

        	}
        ?>
        <a href="index.php" class="btn btn-primary"> Página Inicial </a> 
        <a href="cadastro.php" class="btn btn-primary">Novo Funcionário</a> 
    </body>
</html>