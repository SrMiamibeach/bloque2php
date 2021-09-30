<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio2</title>
</head>

<body>
    <?php
    class ejer2
    {

        public function tabla($lineas,$columnas){
            $tabla="<table border=1>";
            for($i = 0; $i<$lineas;$i++){
                $tabla.="<tr>";
                for($j = 0; $j<$lineas;$j++){
                    $tabla.="<td>Fila: ".$i." Col: ".$j."</td>";
                }

                $tabla.="</tr>";
            }
            $tabla.="</table>";
            return $tabla;
        }
    }
    $obj = new Ejer2();
    echo $obj->tabla(4,4);

    ?>
</body>

</html>