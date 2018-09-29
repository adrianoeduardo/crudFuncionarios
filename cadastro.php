<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Untitled</title>
        <link rel="stylesheet" href="lib/bootstrap.css">
        <?php
        	require_once 'crud.php';

        	$id = isset($_GET['id'])? $_GET['id'] : "";

        	if ($id <> ""){
        		$res = lerDados($id);
        		$ler = mysqli_fetch_array($res);   
        		  		      		
        	}
        	else{
        		@$ler = [
        			nome => "",
        			telefone => "",
        			cpf => "",
        			funcao => "",
        		];
        	}

        ?>
    </head>
    <body>
        
        <div class="jumbotron">

	        <h1> Cadastro de Funcionários </h1>
			
	        <form method="POST" action="salvar.php"> 
	        	<input type="hidden" name = "id" value="<?php echo $id ?>">
	        	<div class="row form-group">
	        		<div class="col-md-1">
	        			Nome: 
	        		</div>
	        		<div class="col-md-5">
	        			<input type="text" class="form-control" name="nome" value="<?php echo $ler['nome'] ?>">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-1">
	        			Telefone: 
	        		</div>
	        		<div class="col-md-5">
	        			<input type="text" class="form-control" name="telefone" value="<?php echo $ler['telefone'] ?>">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-1">
	        			CPF :
	        		</div>
	        		<div class="col-md-5">
	        			<input type="text" class="form-control" name="cpf" value="<?php echo $ler['cpf'] ?>">
	        		</div>
	        	</div>
	        	<div class="row form-group">
	        		<div class="col-md-1">
	        			Função : 
	        		</div>
	        		<div class="col-md-5">
	        			<select name="funcao" class="custom-select">
	        				<option value=""> Selecione </option>
	        				<?php 
	        					$funcoes = lerFuncoes();
	        					foreach ($funcoes as $key => $value) {
	        						if ($ler['funcao'] == $value['cod_funcao']){
										echo "<option value='".$value['cod_funcao']."' selected>".$value['nome_funcao']."</option>";
									}else{
										echo "<option value='".$value['cod_funcao']."'>".$value['nome_funcao']."</option>";
									}
	        						
	        					}
	        				?>
	        			</select> 				
	        			
	        		</div>
	        	</div>
	        	<input type="submit" class="btn btn-primary" value="Salvar">
	        	<a href="index.php" class="btn btn-secondary"> Voltar </a>
	        </form>
	    </div>


        
    </body>
</html>