<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio9</title>
</head>

<body>
    <?php
    class ejer9
    {
        public function calculate($value)
        {
            if ($value < 0) {
                throw new InvalidArgumentException("El numero" . $value . "es negativo");
            }
            return "el area es:" . pow($value, 2)."<br>";
        }
    }
    $lados = [-1, 2, 3, 24];
    foreach ($lados as $value) {
        try {

            $obj = new ejer9();

            echo $obj->calculate($value);
        } catch (InvalidArgumentException $e) {
            echo $e."<br>";
        }
    }

    ?>
</body>

</html>