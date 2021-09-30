<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio1</title>
</head>

<body>
    <?php
    class ejer1
    {
        private $numNatural = [];
        private $factoriales = [];

        public function numerosNaturales()
        {
            for($i = 0; $i<10;$i++){
                $this->numNatural[$i] = $i;
            }
        }
        public function factorial(){
            for($i = 0; $i<count($this->numNatural);$i++){
                $factorial=1;
                for($j=$this->numNatural[$i];$j>0;$j--){
                    $factorial*=$j;
                }
                $this->factoriales[$i] = $factorial;
                echo $factorial."<br>";
            }
        }
    }
    $obj = new Ejer1();
    $obj->numerosNaturales();
    $obj->factorial();
    ?>
</body>

</html>