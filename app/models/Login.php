<?php
namespace app\models; //evita conflito dentro das classes
use app\core\Model;
use Exception; //usando a classe core\Models

class Login extends Model{

	private $instituicao = null;
	private $mat = null;
	private $nome = null;
	private $nivel = null;
	private $login = null;
	private $senha = null;

	public function __construct(){ parent::__construct(); }


	public function getInstituicao(){ return $this->instituicao;}
	public function setInstituicao($instituicao){

		if(empty($instituicao)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->instituicao = $instituicao;
		endif;
	}

	public function getMat(){ return $this->mat;}
	public function setMat($mat){

		if(empty($mat)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->mat = $mat;
		endif;
	}

	public function getNome(){ return $this->nome;}
	public function setNome($nome){

		if(empty($nome)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->nome = $nome;
		endif;
	}

	public function getLogin(){ return $this->login;}
	public function setLogin($login){

		if(empty($login)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->login = $login;
		endif;
	}

	public function getSenha(){ return $this->senha;}
	public function setSenha($senha){

		if(empty($senha)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->senha = $senha;
		endif;
	}

	public function getNivel(){ return $this->nivel;}
	public function setNivel($nivel){

		if(empty($nivel)):
			header("location:" . URL_BASE . "Login/index");
		else:
			$this->nivel = $nivel;
		endif;
	}

	public function getAcesso(){

		try {

		$sql = "SELECT * FROM tabela_loginsenha WHERE Login = :l and Senha = :s";

		$qry = $this->database->prepare($sql);

		$qry->bindValue(":l",$this->login);
		$qry->bindValue(":s",$this->senha);

		$qry->execute();

		if($qry->rowCount() == 1):
			$linha = $qry->fetch(\PDO::FETCH_OBJ);
				$nome = $linha->Nome;
				$mat = $linha->Mat;
				$nivel = $linha->Nivel;

				session_start();

				$_SESSION['usuario_nome'] = $nome;
				$_SESSION['usuario_mat'] = $mat;
				$_SESSION['usuario_nivel'] = $nivel;
		else:
			return "0";
		endif;

		} catch (Exception $e) { echo "Erro de Cadastramento"; }

	}//metodo

	public function cadastrar(){

 		try {

 		$sql = "INSERT INTO tabela_loginsenha SET instituicao = :i, Mat = :m, Nome = :n, Login = :l, Senha = :s, Nivel = :ni";
		$qry = $this->database->prepare($sql);
		$qry->bindValue(":i",$this->instituicao);
		$qry->bindValue(":m",$this->mat);
		$qry->bindValue(":n",$this->nome);
		$qry->bindValue(":l",$this->login);
		$qry->bindValue(":s",$this->senha);
		$qry->bindValue(":ni",$this->nivel);
		return $qry->execute();

		} catch (Exception $e) { echo "Erro de Cadastramento"; }

 	}//metodo

 	public function getListar($group_cond){

 		try{

 		    if(!empty($this->mat) || !empty($this->nome)){
 		        $consulta = "SELECT * FROM tabela_loginsenha WHERE " . $group_cond . " ORDER BY id DESC";
            }else{
                $consulta = "SELECT * FROM tabela_loginsenha " .$group_cond. " ORDER BY id DESC";
            }

 			$sql = $consulta;
 			$query = $this->database->prepare($sql);
 			if(!empty($this->mat)){
                $query->bindValue(":matricula", $this->mat);
            }
 			if(!empty($this->nome)){
                $query->bindValue(":nome", "%".$this->nome."%");
            }
 			$query->execute();

 			return $result = $query->fetchAll(\PDO::FETCH_OBJ);

 		} catch (Exception $e) { echo "Erro de Cadastramento"; }

 	}

 	public function getMostrar($id){
	    try{
	        $sql = "SELECT * FROM tabela_loginsenha WHERE id = :id";
	        $sql = $this->database->prepare($sql);
	        $sql->bindValue(":id", $id);
	        $sql->execute();

	        if($sql->rowCount() > 0){
                return $result = $sql->fetch(\PDO::FETCH_OBJ);
            }

        }catch (Exception $e){echo "Erro na alteração.";}
    }

    public function update($id){

        try {
            $sql = "UPDATE tabela_loginsenha SET instituicao = :i, Mat = :m, Nome = :n, Login = :l, Senha = :s, Nivel = :ni WHERE id = :id";
            $qry = $this->database->prepare($sql);
            $qry->bindValue(":i",$this->instituicao);
            $qry->bindValue(":m",$this->mat);
            $qry->bindValue(":n",$this->nome);
            $qry->bindValue(":l",$this->login);
            $qry->bindValue(":s",$this->senha);
            $qry->bindValue(":ni",$this->nivel);
            $qry->bindValue(":id", $id);
            return $qry->execute();
        } catch (Exception $e) { echo "Erro de Atualização"; }

    }//metodo

}//class
