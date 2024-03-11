<?php 
    class FormValidator {
        public $require;
        public $username;
        public $email;
        public $name;
        public $message;

        public function addValidation($n, $req, $msg)
        {
            if($n == "Name") 
            {
                $this->name = $n;
                
            }
            $this->require = $req;
            $this->message = $msg;
            echo $this->name;
            echo "<br>";
            echo $this->require;
            echo "<br>";
            echo $this->message;
        }
    }
    $validator = new FormValidator();
    $validator->validator("Name", "Require", "Plese Fill Name");
?>