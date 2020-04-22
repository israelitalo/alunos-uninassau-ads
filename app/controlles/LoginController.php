<?php
namespace app\controlles; //evita conflito dentro das classes
use app\core\Controller; //usando a classe core\Controller
use app\models\Login;

class LoginController extends Controller{

	public function index(){
		$dados["view"] = "input";
		$this->load("pagina_login", $dados);
	}

	public function login(){

        $acesso = new Login(); //instanciando a classe

        $login_ = (isset($_POST["login_"])) ? $acesso->setLogin(strip_tags(strtoupper(filter_input(INPUT_POST, "login_", FILTER_SANITIZE_STRING)))) : header("location:" . URL_BASE . "Login/index");

        $senha_ = (isset($_POST["senha_"])) ? $acesso->setSenha(strip_tags(filter_input(INPUT_POST, "senha_", FILTER_SANITIZE_STRING))) : header("location:" . URL_BASE . "Login/index");


        if($acesso->getAcesso() == "0"):
            header("location:" . URL_BASE . "Login/index");
        else:
            header("location:" . URL_BASE . "Login/acessando");
        endif;

	}//metodo

	public function acessando(){

		$this->load("pagina_principal");

	}//metodo

	public function cadastrar_matricula(){

		$dados["view"] = "usuario/cadastrar_usuario";
		$this->load("pagina_base", $dados);

	}

    public function pesquisar(){

        $dados["view"] = "usuario/pesquisar_usuario";
        $this->load("pagina_base", $dados);

    }

	public function cadastrar(){

	    $id = strip_tags(strtoupper(filter_input(INPUT_POST, "id_usuario", FILTER_SANITIZE_NUMBER_INT)));

		$cadastrar = new Login(); //instanciando a classe

		$cadastrar->setInstituicao(strip_tags(strtoupper(filter_input(INPUT_POST, "instituicao", FILTER_SANITIZE_STRING))));

		$cadastrar->setMat(strip_tags(filter_input(INPUT_POST, "mat_", FILTER_SANITIZE_STRING)));

		$cadastrar->setNome(strip_tags(strtoupper(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING))));

		$cadastrar->setNivel(strip_tags(filter_input(INPUT_POST, "nivel", FILTER_SANITIZE_STRING)));

		$cadastrar->setLogin(strip_tags(strtoupper(filter_input(INPUT_POST, "login_", FILTER_SANITIZE_STRING))));

		$cadastrar->setSenha(strip_tags(filter_input(INPUT_POST, "senha_", FILTER_SANITIZE_STRING)));

		if(empty($id)){
            if($cadastrar->cadastrar() == 1):

                exit("<script>alert('CADASTRO REALIZADO COM SUCESSO!!!')</script>\n<script>window.location = (' " . URL_BASE . "Login/cadastrar_matricula" . " ')</script>");
            else:
                exit("<script>alert('CADASTRO NÃO REALIZADO!!!')</script>\n<script>window.location = (' " . URL_BASE . "Login/cadastrar_matricula" . " ')</script>");
            endif;
        }elseif(isset($id) && !empty($id)){
            if($cadastrar->update($id) == 1):

                exit("<script>alert('CADASTRO ALTERADO COM SUCESSO!!!')</script>\n<script>window.location = (' " . URL_BASE . "Login/pesquisar" . " ')</script>");
            else:
                exit("<script>alert('ALTERAÇÃO NÃO REALIZADA!!!')</script>\n<script>window.location = (' " . URL_BASE . "Login/pesquisar" . " ')</script>");
            endif;
        }

	}

	public function listar_usuario(){

		$pesquisar = new Login(); // instanciando a classe

        $condicao = array();

        if(!empty($_POST['mat_'])){
            $condicao[] = "Mat = :matricula";
            $pesquisar->setMat(strip_tags(filter_input(INPUT_POST, "mat_", FILTER_SANITIZE_STRING)));
        }

        if(!empty($_POST['nome'])){
            $condicao[] = "Nome LIKE :nome";
            $pesquisar->setNome(strip_tags(strtoupper(filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING))));
        }

        $group_cond = join(" AND ", $condicao);

        $dados['relatorios'] = $pesquisar->getListar($group_cond);

        $dados["view"] = "usuario/pesquisar_usuario";
        $this->load("pagina_base", $dados);

	}

	public function atualizar(){
	    $id = strip_tags(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));

	    $usuario = new Login();
	    $dados['usuario'] = $usuario->getMostrar($id);
	    $dados["view"] = "usuario/update";

	    $this->load("pagina_base", $dados);
    }

} //class
