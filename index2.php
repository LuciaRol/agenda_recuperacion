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
       use Models\Contacto;
       $contact = new Contacto();
       $result = $contact->getAll();
       print_r($result);
    ?>

  
</body>
</html>
