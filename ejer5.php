<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio5</title>
</head>

<body>
    <form method="POST">
        <label>Introduce un mes y te diremos cuantos dias tiene</label><br>
        <input type="text" name="mes" />
        <input type="submit" value="Enviar" />
    </form>
    <?php
    $array = [
        "enero" => 31,
        "febrero" => 28,
        "marzo" => 31,
        "abril" => 30,
        "mayo" => 31,
        "junio" => 30,
        "julio" => 31,
        "agosto" => 31,
        "septiembre" => 30,
        "octubre" => 31,
        "noviembre" => 30,
        "diciembre" => 31,
    ];
    if (isset($_POST["mes"])) {
        $mes = $_POST["mes"];
        $mes = strtolower($mes);
        echo $array[$mes];

    }
    ?>

    <!--<pre>
        <?php
            print_r($_POST);
        ?>
    </pre>-->
</body>

</html>