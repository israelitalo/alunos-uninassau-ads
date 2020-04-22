<?php

$count = 0;
$usuarios = array();

if(filter_has_var(INPUT_POST, 'pesquisar')){
    $count = count($relatorios);
    $usuarios = $relatorios;
}

?>

<div class="container">
  <ul class="nav nav-tabs"> <li class="active"><a data-toggle="tab" href="#home"> <img src=" <?php echo URL_BASE . "auxiliar/img/usuario.png" ?> " width="80"/> </a></li> </ul>

	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">

		<form method="POST" action="<?php echo URL_BASE  . "Login/listar_usuario" ?>" enctype="multipart/form-data" onsubmit="this.Cadastrar.value='Enviando...'; this.Cadastrar.disabled=true;">

			<table class="table table-striped" border="0">
			    <thead>
			        <tr>
				        <th scope="col" colspan="4">
				            <font size="4" color="blue"> <center> <strong> <u> PESQUISA DE ALUNO </u> </strong> </center> </font>
				        </th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				        <th scope="rows" width="15%">
				            <label>Matricula:</label>
				            <input type="text" name="mat_" class="form-control" placeholder="MATº" style=" -webkit-border-radius: 10px; " onkeypress="return SomenteNumero(event)">
				        </th>
				        <th width="15%">
				            <label> Nome Completo: </label>
		                    <input type="text" name="nome" class="form-control" style=" -webkit-border-radius: 10px; text-transform: uppercase;" placeholder="Digite o Nome" onkeypress="return letras();"/>
		                </th>
		                <th width="15%">
				    		</br>
		                    <button class="btn btn-lg btn-primary btn-block" name="pesquisar" type="submit"> PESQUISAR </button>
				    	</th>
		        	</tr>
			    </tbody>
			</table>

		</form>

          <?php echo 'Total de registros encontrados: '.$count;?>

          <table class="table table-responsive" border="0">
              <thead>
                <tr bgcolor="#f5f5f5">
                    <td align="center"><label>ID</label></td>
                    <td align="center"><label>Matrícula</label></td>
                    <td align="center"><label>NOME</label></td>
                    <td align="center"><label>INSTITUIÇÃO</label></td>
                    <td align="center"><label>NÍVEL</label></td>
                    <td align="center" colspan="2"><label>AÇÕES</label></td>
                </tr>
              </thead>
              <?php foreach ($usuarios as $usuario): ?>
              <tbody>
                <tr>
                    <td align="center"><label><?php echo $usuario->id;?></label></td>
                    <td align="center"><label><?php echo $usuario->Mat;?></label></td>
                    <td align="center"><label><?php echo $usuario->Nome;?></label></td>
                    <td align="center"><label><?php echo $usuario->instituicao;?></label></td>
                    <td align="center"><label><?php echo $usuario->Nivel;?></label></td>
                    <td align="center"><a href="<?=URL_BASE;?>/Login/atualizar/?id=<?=$usuario->id;?>"><img src="<?=URL_BASE;?>/auxiliar/img/editar.png"></a></td>
                    <td align="center"><a href="<?=URL_BASE;?>/Login/excluir/?id=<?=$usuario->id;?>"><img src="<?=URL_BASE;?>/auxiliar/img/excluir.png"></a></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
          </table>

	</div>
  </div>
</div>
