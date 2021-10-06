<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio7</title>
</head>

<body>
    <form method="POST">
        <p>Base:<input type="text" name="base" /></p>
        <p>Exponente:<input type="text" name="exponente" /></p>
        <input type="submit" />
    </form>
    <?php
    class ejer7
    {
        private $base, $exponente;
        public function __construct($base, $exponente)
        {
            $this->base = (int)$base;
            $this->exponente = (int)$exponente;
            if ($this->base != $base || $this->exponente != $exponente) {
                throw new InvalidArgumentException("Introduce solo numeros");
            }
        }
        public function calcular()
        {
            return "El resultado es: " . pow($this->base, $this->exponente);
        }
    }

    if (isset($_POST["base"]) && isset($_POST["exponente"])) {
        try {
            $obj = new ejer7($_POST["base"], $_POST["exponente"]);
            echo $obj->calcular();
        } catch (InvalidArgumentException $e) {
            echo $e;
        }
    }

    ?>
</body>

</html>