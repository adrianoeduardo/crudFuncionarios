<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funcionarios da Empresa</title>
        <link rel="stylesheet" href="lib/bootstrap.css">
        <?php require_once 'crud.php'; ?>
    </head>
    <body>
       	<div class="container">
        <h1> Funcionários Ativos </h1>        
	        <a href="cadastro.php" class="btn btn-primary"> Novo Funcionário </a> 
	        <table class="table-striped table-bordered container">
	        	<thead class="table-dark">
	        		<tr>
	        			<th> Nome </th>
	        			<th> Função </th>
	        			<th> Telefone </th>
	        			<th> CPF </th>
	        			<th> </th>
	        			<th> </th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        		<?php 
	        			$dados = lerDados("");
	        			foreach ($dados as $key => $value){
	        				echo "<tr> 
	        						<td>".$value['nome']."</td>
	        						<td>".$value['nome_funcao']."</td>
	        						<td>".$value['telefone']."</td>
	        						<td>".$value['cpf']."</td>
	        						<td><a href='cadastro.php?id=".$value['id']."''> Alterar</a></td>
	        						<td><a href='excluir.php?id=".$value['id']."''> Excluir</a></td>
	        					</tr>";
	        					}
	        		?>

	        	
	        	</tbody>

	        </table>
    	</div>
    </body>
</html>