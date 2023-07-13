<?php 
    class Movie {
        public $name;
        public $duration_min;
        public $gender;



        public function __construct(string $_name, int $_duration_min , string $_gender){
            $this->name = $_name;
            $this->duration_min = $_duration_min;
            $this->gender = $_gender;
        }

        public function GetInformation(){
            echo $this->name;
            echo $this->duration_min;
            echo $this->gender;
        }
    }

$venom = new Movie ("Venom", 120, "Azione");


$avengers = new Movie ("Avengers", 120, "Azione");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi</title>
</head>
<body>
    <main>
        <div class="items">
            <div class="card">
                <p>
                    <?php $venom->GetInformation();?>
                </p>
            </div>
            <div class="card">
                <p>
                    <?php $avengers->GetInformation();?>
                </p>
            </div>
        </div>
    </main>
</body>
</html>