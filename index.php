<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda recuperación</title>
</head>
<body>

    <h1>Agenda</h1>

    <?php
        require_once 'autoloader.php';
        require_once './config/config.php';

   
        use Lib\BaseDatos;
        $db = new BaseDatos();
    ?>

    <h2>He conectado con la base de datos</h2>

    <?php
        try{
            $db->consulta("SELECT * FROM contactos");

            while($fila = $db->extraer_registro()){
                foreach($fila as $campo => $valor){
                    echo "$campo: $valor <br><br>";
                }
            }
        }
        catch(PDOException $err){
            die("Error: ejecutando consulta SQL");
        }
    ?>

  
</body>
</html>
