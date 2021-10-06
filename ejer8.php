<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio8</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="file" />
        <input type="submit" />
    </form>
    <?php
    class ejer8
    {
        public function exist($file)
        {
            if (file_exists($file)) {
                echo "El fichero existe";
            } else {
                throw new Exception("El fichero no existe");
            }
        }
    }
    if (isset($_POST["file"])) {
        try {
            $obj = new ejer8();
            $obj->exist($_POST["file"]);
        } catch (Exception $e) {
            echo $e;
        }
    }
    ?>
</body>

</html>