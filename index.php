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
        $db->consulta("SELECT * FROM contactos");

        while($fila = $db->extraer_registro()){
            echo "<br><b>Contacto</b><br> <br>";

            foreach($fila as $campo => $valor){
                echo "$campo: $valor <br>";
            }
        }


        /* use Controllers\FrontController;
        FrontController::main();

        use Lib\BaseDatos;
        $db = new BaseDatos();
        $miscontactos = $db->query('SELECT * FROM contactos')->fetchAll();
    
        foreach($miscontactos as $row){
            echo $row['nombre']."<br />\n";
        } */
    ?>

    <!-- <hr>
    <h2>HE CONECTADO CON LA BASE DE DATOS</h2>
    <hr>
    <h2>Elige una opción para continuar</h2>
    <a href="http://localhost/php/mvc/agenda_mvc/index.php?controller=Contacto&action=mostrarTodos">Mostrar todos mis contactos</a>
     -->
  
</body>
</html>
