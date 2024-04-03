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

        use Controllers\FrontController;
        FrontController::main();
    ?>


    <hr>
    <h2>Elige una opción para continuar</h2>
    <a href="http://localhost/php/mvc/agenda_mvc/index.php?controller=Contacto&action=mostrarTodos">Mostrar todos mis contactos</a>
    
  
</body>
</html>
