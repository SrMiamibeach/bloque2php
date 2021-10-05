<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio5</title>
</head>

<body>
    <form method="POST">
        <label>Introduce un mes y te diremos cuantos dias tiene</label>
        <p>Introduce un nombre:<input type="text" name="nombre" /></p>
        <p>Introduce un mes:<input type="text" name="mes" /></p>
        <input type="submit" value="Enviar" />
    </form>
    <?php
    class ejer6
    {

        private $array;
        public function __construct()
        {
            $this->array =[
                "enero" => "",
                "febrero" => "",
                "marzo" => "",
                "abril" => "",
                "mayo" => "",
                "junio" => "",
                "julio" => "",
                "agosto" => "",
                "septiembre" => "",
                "octubre" => "",
                "noviembre" => "",
                "diciembre" => "",
            ];
        }
        public function anadirNombre($nombre, $mes)
        {
            $nombres = $this->array[$mes];
            echo "A".$nombres;
            $this->array[$mes] = $nombres . $nombre.",";
        }
        public function mostrar()
        {
            foreach($this->array as $key => $value){
                echo $key."--".$value."<br>";
            }
        }
    }
    if (isset($_POST["nombre"]) && isset($_POST["mes"])) {
        $mes = strtolower($_POST["mes"]);
        echo "b".$mes."<br>";
        $nombre = $_POST["nombre"];
        $obj = new ejer6();
        $obj->anadirNombre($nombre, $mes);


    }
    ?>
    <!--<pre>
    <?php
        print_r($_POST);
    ?>
    </pre>-->

</body>

</html>