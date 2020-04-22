<?php

$requi = $_SERVER["HTTP_REFERER"]; //http_referer = se existe o endereço da pagina
  $requi= strtolower("/$requi/"); //coloca tudo pra letra minuscula

$server = $_SERVER['SERVER_NAME']; // O nome host do servidor onde o script atual é executado
  $server= strtolower("/$server/"); //coloca tudo pra letra minuscula

if(preg_match($server, $requi) == 0):
    
  header("Location: https://www.google.com.br");

  die();
                                    
else:

  session_start();

  if($_SESSION['usuario_mat']): 
  
?> 

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="utf-8"/>
	    <title>Agência Central de Inteligência</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	   	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "auxiliar/css3/base/layout_geral.css" ?>">
	   	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "auxiliar/css3/menu/menus.css" ?>">
	    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "auxiliar/bootstrap/css/bootstrap.min.css" ?>">
	    <!-- javascript -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
	    <script src="<?php echo URL_BASE . "auxiliar/bootstrap/js/bootstrap.min.js" ?>"></script>
	</head> 
  	<body> 

  		<div class="base">
  			<center> <h2> UNINASSAU </h2> </center>

  			<table class="table table-striped" border="0"> <thead> <tr> <th scope="col" bgcolor="blue"> </th> </tr> </thead> </table>

  			<?php include "menu.php"; ?>

  			<p align="center">
  				<img src=" <?php echo URL_BASE . "auxiliar/img/uninassau.png" ?> " width="450" height="300"/>
  			</p>

  			<div class="rodape">
  				<hr> Site desenvolvido pela turma do 5º Período do Curso de ADS/ UNINASSAU - CARUARU / ADS@ todos os direitos reservados <hr> 
  			</div>
  		</div>

    </body>
</html>

<?php

  else: 
      header("location:" . URL_BASE . "Index");
  endif;

endif;
