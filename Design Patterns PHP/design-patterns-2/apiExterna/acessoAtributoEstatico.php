<?php
	class Teste{
        private static $instance = null;
        private $produto;
        private $valor;

        private function __construct($produto,$valor){
            $this->produto = $produto;
            $this->valor = $valor;
        }

        public static function getInstance($produto,$valor){
            if(is_null(self::$instance)){
                self::$instance = new Teste($produto,$valor);
            }
            return self::$instance;
			/*
				Acessar um atributo estático: SELF
			*/
        }
    }
?>