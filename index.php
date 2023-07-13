<?php 
    class Movie {
        public $name;
        public $duration_min;
        public $gender;



        public function __construct(string $_name, GetStringDuration $duration_min, string $_gender){
            $this->name = $_name;
            $this->gender = $_gender;
        }

        public function GetStringDuration($duration_min){
            $duration_min = $duration_min." minuti";
            return $duration_min;
        }

        public function GetInformation(){
            echo $this->name;
            echo $this->duration_min;
            echo $this->gender;
        }
    }

$venom = new Movie ("Venom", GetStringDuration(120), "Azione");
$venom->GetInformation();

$avengers = new Movie ("Avengers", GetStringDuration(120), "Azione");
$avengers->GetInformation();
?>