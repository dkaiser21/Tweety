<?php
    class Account{
        private $pdo;
        public function __construct(){
            $this->pdo=Database::instance();
        }

        public function register($fn,$ln,$un,$em,$pw,$pw2){
        }
    }
?>