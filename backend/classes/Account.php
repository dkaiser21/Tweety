<?php
    class Account{
        private $pdo;
        private $errorArray=array();

        public function __construct(){
            $this->pdo=Database::instance();
        }

        public function register($fn,$ln,$un,$em,$pw,$pw2){
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
        }

        private function validateFirstName($fn){
            if(strlen($fn) < 2 || strlen($fn) > 25){
                return array_push($this->errorArray,Constant::$firstNameCharacters);
            }
        }

        private function validateLastName($ln){
            if(strlen($ln) < 2 || strlen($ln) > 25){
                return array_push($this->errorArray,Constant::$lastNameCharacters);
            }
        }

        public function generateUsername($fn,$ln){
            if(!empty($fn) && !empty($ln)){
                if(!in_array(Constant::$firstNameCharacters,$this->errorArray) && !in_array(Constant::$lastNameCharacters,$this->errorArray)){
                $username=strtolower($fn.''.$ln);
                if($this->checkUsernameExist($username)){
                    $screenRand=rand();
                    $userLink=$username.''.$screenRand;
                    }else{
                        $userLink=$username;
                    }
                    return $userLink;
                }
            }
        }

        public function checkUsernameExist($username){
            $stmt=$this->pdo->prepare("SELECT * FROM 'users' WHERE username=!username");
            $stmt->bindParam(":username",$username,PDO::PARAM_STR);
            $stmt->execute();
            $count=$stmt->rowCount();
            if($count >0){
                return true;
            }else{
                return false;
            }
        }

        public function getErrorMessage($error){
            if(in_array($error,$this->errorArray)){
                return "<span class='errorMessage'>$error</span>";
            }
        }
    }
?>