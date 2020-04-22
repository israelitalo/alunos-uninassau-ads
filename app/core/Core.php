<?php


	class Core{
		
		private $controller;
		private $metodo;
		private $parametro = array();

		public function __construct(){ $this->Verificador(); }

		public function run(){

			$controller = $this->getController();
			$control = new $controller();
			call_user_func_array(array($control, $this->getMetodo()), $this->getParametro());
		}

		public function Verificador(){
			$url =  explode("index.php", $_SERVER["PHP_SELF"]);
			$novo_url = end($url);

			if($novo_url != ""):
				$url_novo = explode("/", $novo_url);

				//Separa o Controller
				array_shift($url_novo);// excluir o ultimo valor do Array
				$this->controller = ucfirst($url_novo[0] . "Controller");
				
				//Separa o Metodo
				array_shift($url_novo);// excluir o ultimo valor do Array
				if(isset($url_novo[0])):
					$this->metodo = $url_novo[0];
				endif;

				//Separa o Metodo
				array_shift($url_novo);// excluir o ultimo valor do Array
				if(isset($url_novo[0])):
					$this->parametro = array_filter($url_novo);
				endif;

			else:
				$this->controller = ucfirst(CONTROLLER_PADRAO) . "Controller";
			endif;
		}//metodo

		public function getController(){
			if(class_exists(NAMESPACE_CONTROLLER . $this->controller)):
				return NAMESPACE_CONTROLLER . $this->controller;
			else:
				return NAMESPACE_CONTROLLER . ucfirst(CONTROLLER_PADRAO) . "Controller";
			endif;
		}

		public function getMetodo(){

			if(method_exists(NAMESPACE_CONTROLLER . $this->controller, $this->metodo)):
				return $this->metodo;
			endif;

			return METODO_PADRAO;

		}

		public function getParametro(){
			return $this->parametro;
		}

	}//class