<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio10</title>
</head>

<body>
    <?php
    require("ejer10.php");
    class user extends persona
    {
        private $punto;
        
        public function setPunto($punto)
        {
            $this->punto = $punto;
        }
        public function getPunto()
        {
            return $this->punto;
        }
        public function puntos()
        {
            if ($this->punto >= 100) {
                echo "Tienes mas de 100 puntos: " . $this->punto;
            } else {
                echo "Tienes menos de 100 puntos: " . $this->punto;
            }
        }
        public function __toString()
        {
            return "User: " . parent::getNombre(). " " . parent::getApellido() . " con dni: " . parent::getDni()." tiene ".$this->punto." puntos";
        }
    }
    ?>
    <?php
    $user = new user("75466687C","Aaron","Gomez");
    $user->setPunto(1200);
    echo $user->__toString();
    ?>
</body>

</html>