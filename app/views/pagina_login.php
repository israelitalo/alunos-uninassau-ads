<?php
session_start();
    unset($_SESSION['usuario_nome']);
    unset($_SESSION['usuario_mat']);
    unset($_SESSION['usuario_nivel']);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Análise de Desenvolvimento de Sistemas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "auxiliar/bootstrap/css/bootstrap.min.css" ?> ">   
    </head>
    <body class="text-center"> 

    	<div class="container">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <div class="account-wall">
	                    
	               	<?php $this->load($view, $viewData); //carregar as paginas ?>	

	            </div> <!-- <div class="account-wall"> -->	            
	        </div> <!-- <div class="col-sm-6 col-md-4 col-md-offset-4"> -->
	    </div> <!-- <div class="container"> -->
       
    </body>
</html>