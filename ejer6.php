

<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio6</title>
    <style>
        #contenedor1{
            display: flex;
            flex-direction: row;
        }
        h4{
            color: blue;
            width: 8%;
            display: flex;
            flex-direction: column;
        }
        #contenedor2{
            display: flex;
            flex-direction: row;
        }
        #nombres{
            width: 8%;
            display: flex;
            flex-direction: column;

        }
    </style>
</head>

<body>
    <form method="POST">
        <label>Introduce un mes y te diremos cuantos dias tiene</label>
        <p>Introduce un nombre:<input type="text" name="nombre" htmlentities/></p>
        <p>Introduce un mes:<input type="text" name="mes" /></p>
        <input type="submit" value="Enviar" name="submit" />
    </form>
    <?php
    if (!isset($_COOKIE['cumples'])) {
        $cumples = array(
            "enero"      => array(),
            "febrero"    => array(),
            "marzo"      => array(),
            "abril"      => array(),
            "mayo"       => array(),
            "junio"      => array(),
            "julio"      => array(),
            "agosto"     => array(),
            "septiembre" => array(),
            "octubre"    => array(),
            "noviembre"  => array(),
            "diciembre"  => array(),
        );
        setcookie('cumples', json_encode($cumples), 0);
    } else {
        $cumples = json_decode($_COOKIE['cumples'], true);
    }

    function anadirNombre($nombre, $mes) {
        global $cumples;
        array_push($cumples[$mes], $nombre);
        setcookie('cumples', json_encode($cumples), 0);
        $cant_personas = 0;
        foreach($cumples as $mes => $nombres){
            $cant_personas += count($nombres);
        }
        return $cant_personas;
    }

    function mostrar() {
        global $cumples;
        echo '<div id="contenedor1">';
        foreach($cumples as $mes => $nombres){
            echo '<h4>'.$mes.'</h4>';
        }
        echo '</div>';
        echo '<div id="contenedor2">';
        foreach($cumples as $mes => $nombres){
            $texto="";
            foreach($nombres as $nombre) {
                $texto.=$nombre.'<br>';
            }
            echo '<p id="nombres">'.$texto.'</p>';
        }
        echo '</div>';
    }

    if(isset($_POST["nombre"]) && isset($_POST["mes"])) {
            $mes = strtolower($_POST["mes"]);
            if(array_key_exists($mes, $cumples)) {
                $nombre = $_POST["nombre"];
                $contador =anadirNombre($nombre, $mes);
                mostrar();
                echo 'Numero de personas:'.$contador;
            } else {
                echo '<p style="color: red">ESE MES NO EXISTE!</p>';
            }
    }else{
        echo '<p style="color: red">No has introducido nada</p>';
    } 
    
    
    ?>

</body>

</html>