<?php

namespace Controllers;


use Models\Contacto;

class ContactoController {
    public function mostrarTodos() {
        // Se crean los argumentos necesarios para el constructor de Contacto
        $id = '1';
        $nombre = 'Ricardo';
        $apellidos = 'Solano Pérez';
        $correo = 'ric@hotmail.com';
        $direccion = 'C/ Aguamarina, 7';
        $telefono = '958121212';
        $fecha_nacimiento = '1988-05-06';

        // Creamos una instancia de la clase Contacto con los argumentos proporcionados
        $contacto = new Contacto($id, $nombre, $apellidos, $correo, $direccion, $telefono, $fecha_nacimiento);
        
        // Llamamos al método conseguirTodos() para obtener todos los contactos
        $todos_mis_contactos = $contacto->conseguirTodos();
        
        // Llamamos la vista para mostrar todos los contactos
        require_once 'views/contacto/mostrar_todos.php';
    }

    public function crear() {
        
    }
}

    // SIN PROMOCION
    /* private Contacto $contacto;

    function __construct(){
        $this->contacto = new Contacto();
    }

    public function mostrarTodos() {
        $todos_mis_contactos = $this->contacto->conseguirTodos();
        require_once 'views/contacto/mostrar_todos.php';
    }
} */

