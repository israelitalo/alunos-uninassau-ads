<div class="container">
  <ul class="nav nav-tabs"> <li class="active"><a data-toggle="tab" href="#home"> <img src=" <?php echo URL_BASE . "auxiliar/img/usuario.png" ?> " width="80"/> </a></li> </ul>

	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">

	  	<form method="POST" action="<?= URL_BASE . "Paciente/cadastrar"?>" enctype="multipart/form-data" onsubmit="this.Cadastrar.value='Enviando...'; this.Cadastrar.disabled=true;">

	  	<table class="table table-striped" border="0">
            <thead>
            	<tr><td><font color=blue><label><li>DADOS PESSOAIS</li></label></font></td></tr>
                <tr>
	                <th scope="col" colspan="3">
	                    <label> Nome: </label>
	                    <font color="red" size="4">*</font>
	                    <input type="text" name="nome" class="form-control" style=" -webkit-border-radius: 10px; text-transform: uppercase;" placeholder="Digite o Nome" onkeypress="return letras();" required />
	                </th>
	            </tr>
	            <tr>
	                <th scope="col" colspan="2">
	                    <label> Mãe: </label>
	                    <input type="text" name="mae" class="form-control" placeholder="Digite o Nome da Mãe" style=" -webkit-border-radius: 10px; text-transform: uppercase;" onkeypress="return letras();"/>
	                </th>
	                <th scope="col">
	                    <label> Pai: </label>
	                    <input type="text" name="pai" class="form-control" placeholder="Digite o Nome do Pai" style=" -webkit-border-radius: 10px; text-transform: uppercase;" onkeypress="return letras();"/>
	                </th>
	            </tr>
	            <tr>
	                <th scope="col">
	                    <label> Data de Nascimento: </label>
	                    <input type="date" name="nascimento" id="inputEmail" class="form-control" style=" -webkit-border-radius: 10px;"/>
	                </th>
	                <td>
	                    <label> RG: </label>
	                    <input type="text" name="rg" id='inputEmail' class="form-control" style="-webkit-border-radius: 10px;"/>
	                </td>
	                <td>
	                   <label> CPF: </label>
	                    <input type="text" name="cpf" id='inputEmail' class="form-control" style="-webkit-border-radius: 10px;" onkeypress="return SomenteNumero(event)"/>
			        </td>
	            </tr>
	            <tr>
	            	<td>
	                    <label> Telefone: </label>
	                    <font size="2">(81) #####-####</font>
	                    <input type="tel" name="fone" id='inputEmail' maxlength="15" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}$" class="form-control" style="-webkit-border-radius: 10px;"/>
	                </td>
	                <td>
	                   <label> Email: </label>
	                    <input type="email" name="email" id='inputEmail' class="form-control" style="-webkit-border-radius: 10px;"/>
			        </td>
	            	<td width="40%">
	            		<label> Familiares em Contato </label>
			            <textarea name="familia" class="form-control" style="resize: vertical; text-transform: uppercase; -webkit-border-radius: 10px;" placeholder="Relacione os membros da FAMÍLIA"></textarea>
	            	</td>
	            </tr>
	        </thead>
	        <tbody>
	            <tr><td colspan="3"><font color=blue><label><li>ENDEREÇO</li></label></font></td></tr>
	            <tr>
	                <td>
	                    <label> Cep: </label>
	                    <input name="cep" type="text" id="cep" class="form-control" value="" maxlength="9" onblur="pesquisacep(this.value);" style=" -webkit-border-radius: 10px;" onkeypress="return SomenteNumero(event)"/>
	                </td>
	                <td colspan="2">
	                    <label> Logradouro: </label>
	                    <input type="text" id="rua" class="form-control" name="logradouro" placeholder="Digite o Endereço" style=" -webkit-border-radius: 10px; text-transform: uppercase;"/>
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2">
	                    <label> Bairro: </label>
	                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro" onkeypress="return letras();" style=" -webkit-border-radius: 10px; text-transform: uppercase;" />
	                </td>
	                <td>
	                   <label> Número: </label>
	                    <input type="text" class="form-control" name="numero" style=" -webkit-border-radius: 10px; text-transform: uppercase;" onkeypress="return SomenteNumero(event)"/>
	                </td>
	            </tr>
	            <tr>
	                <td>
                        <label> Cidade: </label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite Cidade" onkeypress="return letras();" style=" -webkit-border-radius: 10px; text-transform: uppercase;">
                    </td>
                    <td>
                        <label> Estado: </label>
                        <select name="estado" class="form-control" style=" -webkit-border-radius: 10px;" id="uf">
                                    	<option value="">Selecione...</option>
                                    	<option value="Acre">Acre</option>
                                    	<option value="Alagoas">Alagoas</option>
                                    	<option value="Amapá">Amapá</option>
                                    	<option value="Amazonas">Amazonas</option>
                                    	<option value="Bahia">Bahia</option>
                                    	<option value="Ceará">Ceará</option>
                                    	<option value="Distrito Federal">Distrito Federal</option>
                                    	<option value="Espírito Santo">Espírito Santo</option>
                                    	<option value="Goiás">Goiás</option>
                                    	<option value="Maranhão">Maranhão</option>
                                    	<option value="Mato Grosso">Mato Grosso</option>
                                    	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    	<option value="Minas Gerais">Minas Gerais</option>
                                    	<option value="Pará">Pará</option>
                                    	<option value="Paraíba">Paraíba</option>
                                    	<option value="Paraná">Paraná</option>
                                    	<option value="Pernambuco">Pernambuco</option>
                                    	<option value="Piauí">Piauí</option>
                                    	<option value="Rio de Janeiro">Rio de Janeiro</option>
                                    	<option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    	<option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    	<option value="Rondônia">Rondônia</option>
                                    	<option value="Roraima">Roraima</option>
                                    	<option value="Santa Catarina">Santa Catarina</option>
                                    	<option value="São Paulo">São Paulo</option>
                                    	<option value="Sergipe">Sergipe</option>
                                    	<option value="Tocantins">Tocantins</option>
                        </select>
                    </td>
                    <td>
                        <label> Ponto de Referência: </label>
                        <input name="referencia" class="form-control" type="text" style=" -webkit-border-radius: 10px; text-transform: uppercase;"/>
                    </td>
	            </tr>
	            <tr><td colspan="3"><font color=blue><label><li>DADOS MÉDICOS</li></label></font></td></tr>
	            <tr>
	            	<td>
	            		<label>Data do Contágio:</label>
	            		<font color="red" size="4">*</font>
	            		<input type="date" name="data_afastamento" id="inputEmail" class="form-control" style=" -webkit-border-radius: 10px;" required />
	            	</td>
	            	<td>
	            		<label>Hospital Encaminhado:</label>
	            		<input type="text" name="hospital" placeholder="Digite o nome do Hospital" id="inputEmail" class="form-control" style=" -webkit-border-radius: 10px; text-transform: uppercase;"/>
	            	</td>
	            	<td>
	            		<label>Período de Afastamento:[ em dias]</label>
	            		<font color="red" size="4">*</font>
	            		<input type="text" name="periodo" placeholder="Qtd de dias" id='inputEmail' class="form-control" style="-webkit-border-radius: 10px;" onkeypress="return SomenteNumero(event)" required />
	            	</td>
	            </tr>
	            <tr>
	            	<td>
	            		<label>Situação do paciente:</label>
	            		<font color="red" size="4">*</font>
	            		<select name="situacao" class="form-control" style=" -webkit-border-radius: 10px; " required>
		                    <option value="">Selecione...</option>
	            			<option value="Confirmado">Confirmado</option>
	            			<option value="Suspeito">Suspeito</option>
	            			<option value="Descartado">Descartado</option>
	            			<option value="Obito">Óbito</option>
	            		</select>
	            	</td>
	            	<td colspan="2">
	            		<label> Histórico: </label>
						<font color="red" size="4">*</font>
			            <textarea name="descricao" class="form-control" style="resize: vertical; text-transform: uppercase; -webkit-border-radius: 10px;" placeholder="Descrição Breve" required></textarea>
	            	</td>
	            </tr>
	            <tr>
	            	<td></td>
	            	<td> <button class="btn btn-lg btn-primary btn-block" name="Cadastrar" type="submit"> Cadastrar </button> </td>
	            	<td></td>
	            </tr>
	        </tbody>
	    </table>

	    </form>

	</div>
  </div>
</div>






