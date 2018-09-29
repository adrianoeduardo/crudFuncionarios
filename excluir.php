<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Excluir funcionário</title>
        <link rel="stylesheet" href="lib/bootstrap.css">
       
    </head>
    <body>
        
    <?php
	
		require_once 'crud.php';

		$id = $_GET['id'];
		$res = excluirDados($id);
		echo $res;
	?> 
	 <a href="index.php" class="btn btn-primary"> Página Inicial </a> 
	</body>
</html>