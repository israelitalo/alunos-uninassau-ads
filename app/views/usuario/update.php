<div class="container">
    <ul class="nav nav-tabs"> <li class="active"><a data-toggle="tab" href="#home"> <img src=" <?php echo URL_BASE . "auxiliar/img/usuario.png" ?> " width="80"/> </a></li> </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <form method="POST" action="<?php echo URL_BASE . "Login/cadastrar" ?>" enctype="multipart/form-data" onsubmit="this.Alterar.value='Atualizando...'; this.Alterar.disabled=true;">

                <table class="table table-striped" border="0">
                    <thead>
                    <tr>
                        <th scope="col" colspan="4">
                            <font size="4" color="blue"> <center> <strong> <u> ATUALIZAÇÃO DOS DADOS DO ALUNO </u> </strong> </center> </font>
                        </th>
                    </tr>
                    <tr> <td><input type="hidden" name="id_usuario" value="<?php echo $usuario->id; ?>"></td> </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="rows" width="25%">
                            <label>Instituição:</label>
                            <select name="instituicao" class="form-control" style=" -webkit-border-radius: 10px; " required>
                                <option <?=($usuario->instituicao == 'UNINASSAU RECIFE')?'selected="selected"':'';?> value='UNINASSAU RECIFE'>UNINASSAU RECIFE</option>
                                <option <?=($usuario->instituicao == 'UNINASSAU CARUARU')?'selected="selected"':'';?> value='UNINASSAU CARUARU'>UNINASSAU CARUARU</option>
                            </select>
                        </th>
                        <th scope="rows" width="15%">
                            <label>Matricula:</label>
                            <input type="text" name="mat_" class="form-control" placeholder="MATº" style=" -webkit-border-radius: 10px; " onkeypress="return SomenteNumero(event)" value="<?=$usuario->Mat;?>" required>
                        </th>
                        <th>
                            <label> Nome Completo: </label>
                            <input type="text" name="nome" class="form-control" style=" -webkit-border-radius: 10px; text-transform: uppercase;" placeholder="Digite o Nome" onkeypress="return letras();" value="<?=$usuario->Nome;?>" required/>
                        </th>
                        <th width="25%">
                            <label>Nível de Acesso:</label>
                            <select name="nivel" class="form-control" style="-webkit-border-radius: 10px;" required>
                                <option <?=($usuario->Nivel == 'CHEFIA')?'selected="selected"':'';?> value="CHEFIA">CHEFIA</option>
                                <option <?=($usuario->Nivel == 'OPERACIONAL')?'selected="selected"':'';?> value="OPERACIONAL">OPERACIONAL</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label>Senha:</label>
                            <input type="password" name="senha_" value="<?php

                            /*$qtyCaraceters = 10;
                            //Letras minúsculas embaralhadas
                            $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

                            //Letras maiúsculas embaralhadas
                            $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

                            //Números aleatórios
                            $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
                            $numbers .= 1234567890;

                            //Caracteres Especiais
                            $specialCharacters = str_shuffle('!@#$%*-');

                            //Junta tudo
                            $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;

                            //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
                            $password = substr(str_shuffle($characters), 0, $qtyCaraceters);

                            //Retorna a senha
                            echo $this->password = $password; //$this->GeneratePassword();*/

                            ?>" class="form-control" style=" -webkit-border-radius: 10px; " required>
                        </th>
                        <th colspan="2">
                            </br>
                            <button class="btn btn-lg btn-primary btn-block" name="Alterar" type="submit"> Alterar </button>
                        </th>
                        <th>
                            <label>Digite o Login:</label>
                            <input type="text" name="login_" value="<?=$usuario->Login;?>" class="form-control" placeholder="EMAIL" style=" -webkit-border-radius: 10px; " required>
                        </th>
                    </tr>
                    </tbody>
                </table>

            </form>

        </div>
    </div>
</div>
