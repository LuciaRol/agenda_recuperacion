<?php
// SIN promoción de las propiedades en el constructor.
// esto se puede hacer en un php anterior a php 8.
// QUITAR EL CONSTRUCTOR Y EN EL INDEX SACAR LAS COSAS POR GET Y POR SET


namespace Models;

class Contacto {
    private $id;
    private $nombre;
    private $apellidos;
    private $correo;
    private $direccion;
    private $telefono;
    private $fecha_nacimiento;

    // id
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // nombre
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // apellidos
    public function getApellidos() {
        return $this->apellidos;
    }
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    // correo
    public function getCorreo() {
        return $this->correo;
    }
    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // direccion
    public function getDireccion() {
        return $this->direccion;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    // telefono
    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    // fecha de nacimiento
    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }
    public function setFechaNacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    // función para mostrar los contactos
    public function conseguirTodos() {
        return "Mostraremos todos los contactos de nuestra agenda";
    }
}


// CON promoción de las propiedades en el constructor:
// esto es como se hace en php 8.

/* namespace Models;

class Contacto {
    function __construct(
        private string $id,
        private string $nombre,
        private string $apellidos,
        private string $correo,
        private string $direccion,
        private string $telefono,
        private ?string $fecha_nacimiento,  
    ) {}

    // id
    function getId(): int { //xq es un int y no un string???
        return $this->id;
    }
    public function setId(int $id): void { 
        $this->id = $id; 
    }

    // nombre
    public function getNombre(): string { 
        return $this->nombre; 
    }
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    // apellidos
    public function getApellidos(): string { 
        return $this->apellidos; 
    }
    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    // correo
    public function getCorreo(): string { 
        return $this->correo; 
    }
    public function setCorreo(string $correo): void {
        $this->correo = $correo;
    }

    // direccion
    public function getDireccion(): string { 
        return $this->direccion; 
    }
    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    // telefono
    public function getTelefono(): string { 
        return $this->telefono; 
    }
    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    // fecha de nacimiento
    public function getFechaNacimiento(): ?string { 
        return $this->fecha_nacimiento; 
    }
    public function setFechaNacimiento(?string $fecha_nacimiento): void {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

} */
