<?php

namespace app\controlles; //evita conflito dentro das classes
use app\core\Controller; //usandi a classe core\Controller

class IndexController extends Controller{

	public function index(){
		$dados["view"] = "input";
		$this->load("pagina_login", $dados);
	}

}