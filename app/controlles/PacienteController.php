<?php
namespace app\controlles; //evita conflito dentro das classes
use app\core\Controller;
use app\models\Paciente; //usando a classe core\Controller

class PacienteController extends Controller{

	public function index(){
		$dados["view"] = "input";
		$this->load("pagina_login", $dados);
	}

	public function novo(){
		$dados["view"] = "paciente/cadastrar";
		$this->load("pagina_base", $dados);
	}//metodo

    public function cadastrar(){
        //id para ser utilizado quando for implementar o alterar paciente.
        //$id = strip_tags(strtoupper(filter_input(INPUT_POST, "id_paciente", FILTER_SANITIZE_NUMBER_INT)));

        $paciente = new Paciente();
        $paciente->setNome(strip_tags(strtoupper(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING))));
        $paciente->setMae(strip_tags(strtoupper(filter_input(INPUT_POST, "mae", FILTER_SANITIZE_STRING))));
        $paciente->setPai(strip_tags(strtoupper(filter_input(INPUT_POST, "pai", FILTER_SANITIZE_STRING))));
        $paciente->setNascimento(strip_tags(filter_input(INPUT_POST, "nascimento")));
        $paciente->setRg(strip_tags(strtoupper(filter_input(INPUT_POST, "rg", FILTER_SANITIZE_STRING))));
        $paciente->setCpf(strip_tags(strtoupper(filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING))));
        $paciente->setFone(strip_tags(strtoupper(filter_input(INPUT_POST, "fone", FILTER_SANITIZE_STRING))));
        $paciente->setEmail(strip_tags(strtoupper(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL))));
        $paciente->setFamilia(strip_tags(strtoupper(filter_input(INPUT_POST, "familia", FILTER_SANITIZE_STRING))));
        $paciente->setCep(strip_tags(strtoupper(filter_input(INPUT_POST, "cep", FILTER_SANITIZE_STRING))));
        $paciente->setLogradouro(strip_tags(strtoupper(filter_input(INPUT_POST, "logradouro", FILTER_SANITIZE_STRING))));
        $paciente->setBairro(strip_tags(strtoupper(filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING))));
        $paciente->setNumero(strip_tags(strtoupper(filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING))));
        $paciente->setCidade(strip_tags(strtoupper(filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING))));
        $paciente->setEstado(strip_tags(strtoupper(filter_input(INPUT_POST, "estado", FILTER_SANITIZE_STRING))));
        $paciente->setReferencia(strip_tags(strtoupper(filter_input(INPUT_POST, "referencia", FILTER_SANITIZE_STRING))));
        $paciente->setDataAfastamento(strip_tags(filter_input(INPUT_POST, "data_afastamento")));
        $paciente->setHospital(strip_tags(strtoupper(filter_input(INPUT_POST, "hospital", FILTER_SANITIZE_STRING))));
        $paciente->setPeriodo(strip_tags(strtoupper(filter_input(INPUT_POST, "periodo", FILTER_SANITIZE_STRING))));
        $paciente->setSituacao(strip_tags(strtoupper(filter_input(INPUT_POST, "situacao", FILTER_SANITIZE_STRING))));
        $paciente->setDescricao(strip_tags(strtoupper(filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING))));

        //if(empty($id)){
            if($paciente->cadastrar() == 1):
                exit("<script>alert('CADASTRO REALIZADO COM SUCESSO!')</script>\n<script>window.location = (' " . URL_BASE . "Paciente/novo" . " ')</script>");
            else:
                exit("<script>alert('CADASTRO NÃO REALIZADO!')</script>\n<script>window.location = (' " . URL_BASE . "Paciente/novo" . " ')</script>");
            endif;
        /*}elseif(isset($id) && !empty($id)){
            if($paciente->update($id) == 1):

                exit("<script>alert('CADASTRO ALTERADO COM SUCESSO!!!')</script>\n<script>window.location = (' " . URL_BASE . "Paciente/listar" . " ')</script>");
            else:
                exit("<script>alert('ALTERAÇÃO NÃO REALIZADA!!!')</script>\n<script>window.location = (' " . URL_BASE . "Paciente/listar" . " ')</script>");
            endif;
        }*/

    }//metodo

	public function listar(){

	    $paciente = new Paciente();

	    $condicao = array();

        if(!empty($_POST['nome'])){
            $condicao[] = "nome LIKE :nome";
            $paciente->setNome(strip_tags(strtoupper(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING))));
        }

        if(!empty($_POST['mae'])){
            $condicao[] = "mae LIKE :mae";
            $paciente->setMae(strip_tags(strtoupper(filter_input(INPUT_POST, "mae", FILTER_SANITIZE_STRING))));
        }

        if(!empty($_POST['cpf'])){
            $condicao[] = "cpf LIKE :cpf";
            $paciente->setCpf(strip_tags(strtoupper(filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING))));
        }

        if(!empty($_POST['bairro'])){
            $condicao[] = "bairro LIKE :bairro";
            $paciente->setBairro(strip_tags(strtoupper(filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING))));
        }

        if(!empty($_POST['situacao'])){
            $condicao[] = "situacao LIKE :situacao";
            $paciente->setSituacao(strip_tags(strtoupper(filter_input(INPUT_POST, "situacao", FILTER_SANITIZE_STRING))));
        }

        if(!empty($_POST['data1'])){
            $condicao[] = "data_afastamento = :data_afastamento";
            $paciente->setDataAfastamento(strip_tags(strtoupper(filter_input(INPUT_POST, "data1", FILTER_SANITIZE_STRING))));
        }

        /*if(!empty($_POST['data2'])){
            $condicao[] = "situacao LIKE :situacao";
            $paciente->setMae(strip_tags(strtoupper(filter_input(INPUT_POST, "data2", FILTER_SANITIZE_STRING))));
        }*/

        $group_cond = join(" AND ", $condicao);

        $dados['listaPacientes'] = $paciente->listarPacientes($group_cond);

        $dados["view"] = "paciente/listar";
        $this->load("pagina_base", $dados);

	}//metodo

}
