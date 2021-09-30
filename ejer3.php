<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    class ejer3
    {
        private $array = [];
        public function rellenar(){
            
            for($i=0;$i<20;$i++){
                $this->array[$i] = rand(0,100);
            }
            sort($this->array);
            for($i=0;$i<20;$i++){
                echo $this->array[$i]."-";
            }
            $texto=$this->menor();
            $texto.=$this->mayor();
            $texto.=$this->sumaMedia();
            return $texto;
        }
        private function menor(){
            $min = 100;
            for($i=0;$i<20;$i++){
                if($this->array[$i] < $min){
                    $min = $this->array[$i];
                }
            }
            return "<p style=color:blue;>El minimo: ".$min."</p><br>";
        }
        private function mayor(){
            $max = 0;
            for($i=0;$i<20;$i++){
                if($this->array[$i] > $max){
                    $min = $this->array[$i];
                }
            }
            return "<p style=color:green;>El maximo: ".$min."</p><br>";
        }
        private function sumaMedia(){
            $suma = 0;
            for($i=0;$i<20;$i++){
                $suma+=$this->array[$i];
            }
            $media = (float)($suma/count($this->array));
            return "<p>Suma de todos: ".$suma."</p><br><p>La media: ".$media."</p>";
        }
    }
    $obj = new Ejer3();
    echo $obj->rellenar();
    ?>
</body>

</html>