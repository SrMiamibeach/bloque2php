<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    class ejer4
    {
        private $str ="manzana pera limón sandía melón";
        public function asociativo(){
            echo $this->str[0];
        }
    }
    $obj = new ejer4();
    echo $obj->asociativo();

    ?>
</body>

</html>