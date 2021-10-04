<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio4</title>
</head>

<body>
    <?php
    class ejer4
    {
        private $str ="manzana pera limón sandía melón";
        public function asociativo(){
            $array = explode(" ",$this->str);
            $asociativo = [];
            for($i =0; $i<count($array);$i++){
                $asociativo[$array[$i]] = strlen($array[$i]);
            }
            foreach($asociativo as $key => $value){
                echo $key . " : " . $value . "<br>";
            }            
        }
    }
    $obj = new ejer4();
    echo $obj->asociativo();

    ?>
</body>

</html>