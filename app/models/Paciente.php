<?php
namespace app\models; //evita conflito dentro das classes
use app\core\Model;
use Exception; //usando a classe core\Models

class Paciente extends Model{

    private $nome = null;
    private $pai = null;
    private $mae = null;
    private $nascimento = null;
    private $rg = null;
    private $cpf = null;
    private $fone = null;
    private $email = null;
    private $familia = null;
    private $cep = null;
    private $logradouro = null;
    private $bairro = null;
    private $numero = null;
    private $cidade = null;
    private $estado = null;
    private $referencia = null;
    private $data_afastamento = null;
    private $hospital = null;
    private $periodo = null;
    private $situacao = null;
    private $descricao = null;

    public function __construct(){ parent::__construct(); }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if(empty($nome)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->nome = $nome;
        endif;
    }

    public function getPai()
    {
        return $this->pai;
    }

    public function setPai($pai)
    {
        if(empty($pai)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->pai = $pai;
        endif;
    }

    public function getMae()
    {
        return $this->mae;
    }

    public function setMae($mae)
    {
        if(empty($mae)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->mae = $mae;
        endif;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        if(empty($nascimento)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->nascimento = $nascimento;
        endif;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        if(empty($rg)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->rg = $rg;
        endif;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        if(empty($cpf)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->cpf = $cpf;
        endif;
    }

    public function getFone()
    {
        return $this->fone;
    }

    public function setFone($fone)
    {
        $this->fone = $fone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFamilia()
    {
        return $this->familia;
    }

    public function setFamilia($familia)
    {
        $this->familia = $familia;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        if(empty($cep)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->cep = $cep;
        endif;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        if(empty($cidade)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->cidade = $cidade;
        endif;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        if(empty($estado)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->estado = $estado;
        endif;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function getDataAfastamento()
    {
        return $this->data_afastamento;
    }

    public function setDataAfastamento($data_afastamento)
    {
        if(empty($data_afastamento)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->data_afastamento = $data_afastamento;
        endif;
    }

    public function getHospital()
    {
        return $this->hospital;
    }

    public function setHospital($hospital)
    {
        if(empty($hospital)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->hospital = $hospital;
        endif;
    }

    public function getPeriodo()
    {
        return $this->periodo;
    }

    public function setPeriodo($periodo)
    {
        if(empty($periodo)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->periodo = $periodo;
        endif;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setSituacao($situacao)
    {
        /*if(empty($situacao)):
            header("location:" . URL_BASE . "Login/index");
        else:*/
            $this->situacao = $situacao;
        //endif;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        if(empty($descricao)):
            header("location:" . URL_BASE . "Login/index");
        else:
            $this->descricao = $descricao;
        endif;
    }

    public function cadastrar(){

        try{

            $sql = "INSERT INTO tabela_paciente SET nome = :nome, pai = :p, mae = :m, nascimento = :n, rg = :r, cpf = :cpf, fone = :f, email = :e,
                                                    familia = :fam, cep = :cep, logradouro = :rua, bairro = :b, numero = :num, cidade = :cidade,
                                                    estado = :est, referencia = :ref, data_afastamento = :af, hospital = :hosp, periodo = :per,
                                                    situacao = :sit, descricao = :des";
            $sql = $this->database->prepare($sql);
            $sql->bindValue(":nome", $this->nome);
            $sql->bindValue(":p", $this->pai);
            $sql->bindValue(":m", $this->mae);
            $sql->bindValue(":n", $this->nascimento);
            $sql->bindValue(":r", $this->rg);
            $sql->bindValue(":cpf", $this->cpf);
            $sql->bindValue(":f", $this->fone);
            $sql->bindValue(":e", $this->email);
            $sql->bindValue(":fam", $this->familia);
            $sql->bindValue(":cep", $this->cep);
            $sql->bindValue(":rua", $this->logradouro);
            $sql->bindValue(":b", $this->bairro);
            $sql->bindValue(":num", $this->numero);
            $sql->bindValue(":cidade", $this->cidade);
            $sql->bindValue(":est", $this->estado);
            $sql->bindValue(":ref", $this->referencia);
            $sql->bindValue(":af", $this->data_afastamento);
            $sql->bindValue(":hosp", $this->hospital);
            $sql->bindValue(":per", $this->periodo);
            $sql->bindValue(":sit", $this->situacao);
            $sql->bindValue(":des", $this->descricao);
            return $sql->execute();

        } catch (Exception $ex){ echo "Erro de Cadastramento"; }

    }

    public function listarPacientes($group_cond){
        try {

            if(!empty($this->nome) || !empty($this->mae) || !empty($this->cpf || !empty($this->bairro
            || !empty($this->situacao) || !empty($this->data_afastamento)))){
                $consulta = "SELECT * FROM tabela_paciente WHERE " . $group_cond . " ORDER BY id DESC";
            }else{
                $consulta = "SELECT * FROM tabela_paciente " .$group_cond. " ORDER BY id DESC";
            }

            $sql = $consulta;
            $query = $this->database->prepare($sql);
            if(!empty($this->nome)){
                $query->bindValue(":nome", "%".$this->nome."%");
            }
            if(!empty($this->mae)){
                $query->bindValue(":mae", "%".$this->mae."%");
            }
            if(!empty($this->cpf)){
                $query->bindValue(":cpf", "%".$this->cpf."%");
            }
            if(!empty($this->bairro)){
                $query->bindValue(":bairro", "%".$this->bairro."%");
            }
            if(!empty($this->situacao)){
                $query->bindValue(":situacao", "%".$this->situacao."%");
            }
            if(!empty($this->data_afastamento)){
                $query->bindValue(":data_afastamento", $this->data_afastamento);
            }
            $query->execute();

            $result = $query->fetchAll(\PDO::FETCH_OBJ);

            return $result;

        }catch (Exception $ex){ echo "Erro de Cadastramento"; }
    }


}//classe

?>
