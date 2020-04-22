<?php

$count = 0;
$pacientes = array();

if(filter_has_var(INPUT_POST, 'Pesquisar')){
    $count = count($listaPacientes);
    $pacientes = $listaPacientes;
}

?>
<div class="container">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <form method="POST" action="<?php echo URL_BASE . "Paciente/listar" ?>" enctype="multipart/form-data">

            	<table class="table table-striped" border="0">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5">
                                <font size="4" color="blue"> <center> <strong> <u> PESQUISAR PACIENTE </u> </strong> </center> </font>
                            </th>
                        </tr>
                        <tr>
                        	<td>
                        		<label> Nome: </label>
	                    		<input type="text" name="nome" class="form-control" style=" -webkit-border-radius: 10px; text-transform: uppercase;" placeholder="Digite o Nome" onkeypress="return letras();"/>
                        	</td>
                        	<td>
                                <label> Mãe: </label>
                                <input type="text" name="mae" class="form-control" placeholder="Digite o Nome da Mãe" style=" -webkit-border-radius: 10px; text-transform: uppercase;" onkeypress="return letras();"/>
                        	</td>
                        	<td width="20%"></td>
                        	<td>
                        		<label> CPF: </label>
                                <input type="text" name="cpf" class="form-control" style="-webkit-border-radius: 10px;" onkeypress="return SomenteNumero(event)"/>
                        	</td>
                        	<td>
                                <label> Bairro: </label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro" onkeypress="return letras();" style=" -webkit-border-radius: 10px; text-transform: uppercase;" />
                        	</td>
                    	</tr>
                    	<tr>
                    		<td colspan="2">
                                <label>Situação do paciente:</label>
                                <select name="situacao" class="form-control" style=" -webkit-border-radius: 10px; ">
                                    <option value="">Selecione...</option>
                                    <option value="Confirmado">Confirmado</option>
                                    <option value="Suspeito">Suspeito</option>
                                    <option value="Descartado">Descartado</option>
                                    <option value="Obito">Óbito</option>
                                </select>
                            </td>
                    		<td>
                    			<button class="btn btn-lg btn-primary btn-block" type="submit" name="Pesquisar" required> Pesquisar </button>
                    		</td>
                    		<td>
                                <label>Data do Afastamento [ Inicial ]:</label>
                                <input type="date" name="data1" class="form-control" style=" -webkit-border-radius: 10px; ">
                            </td>
                            <td>
                                <label>Data do Afastamento [ Final ]:</label>
                                <input type="date" name="data2" class="form-control" style=" -webkit-border-radius: 10px; ">
                            </td>
                    	</tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </form>

            <?php echo 'Quantidade de Pesquisas Geradas: [ '.$count.' ]';?>

            <br/><br/>

            <div style="overflow:scroll;width:100%;height:500px;overflow:auto">

            	<table class="table table-striped" border="0">
            		<thead>
            			<tr bgcolor="#AAA">
            				<td align="center" width="5%"> <font color="white" size="2"> <label> ID: </label> </font> </td>
            				<td align="center" width="30%"> <font color="white" size="2"> <label> NOME: </label> </font> </td>
            				<td align="center" width="10%"> <font color="white" size="2"> <label> SITUAÇÃO: </label> </font> </td>
                            <td align="center" width="10%"> <font color="white" size="2"> <label> DIAS AFASTADO: </label> </font> </td>
                            <td align="center" width="10%">
                                <font color="white" size="2"> <label> DATA SAÍDA: </label> </font>
                            </td>
                            <td align="center" width="10%">
                                <font color="white" size="2"> <label> DATA RETORNO: </label> </font>
                            </td>
							<td align="center" colspan="2" width="10%"> <label> <font color="white" size="2"> AÇÕES: </font> </label> </td>
            			</tr>
            		</thead>
                    <?php foreach ($pacientes as $paciente): ?>
            		<tbody>
            			<tr>
                            <td align="center"> <?php echo $paciente->id;?> </td>
                            <td align="center"> <?php echo $paciente->nome;?> </td>
                            <td align="center"> <?php echo $paciente->situacao;?> </td>
                            <td align="center"> <?php echo $paciente->periodo;?> </td>
                            <td align="center"> <?php echo date('d/m/Y', strtotime($paciente->data_afastamento));?> </td>
                            <td align="center"> <?php echo date('d/m/Y', strtotime('+'.$paciente->periodo.' days', strtotime($paciente->data_afastamento)));?> </td>
                            <td align="center"> <img src="<?php echo URL_BASE . "auxiliar/img/editar.png" ?>" width="30" title="Atualizar"> </td>
                            <td align="center"> <img src="<?php echo URL_BASE . "auxiliar/img/excluir.png" ?>" width="30" title="Excluir"> </td>
            			</tr>
            		</tbody>
                    <?php endforeach; ?>
            	</table>

            </div>

        </div>
    </div>
</div>
