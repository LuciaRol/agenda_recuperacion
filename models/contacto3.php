<?php
// SIN promoción de las propiedades en el constructor.
// esto se puede hacer en un php anterior a php 8.
// QUITAR EL CONSTRUCTOR Y EN EL INDEX SACAR LAS COSAS POR GET Y POR SET


namespace Models;
use Lib\BaseDatos;
use PDO;
use PDOException;

class Contacto3 {

    private BaseDatos $conexion;
    private mixed $stmt;

    public function __construct {
        private string|null $id=null;
        private string $nombre='';
        private string $apellidos='';
        private string $correo='';
        private string $direccion='';
        private string $telefono='';
        private ?string $fecha_nacimiento='';
    }
    $this-> conexion = new BaseDatos;

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

    // metodo que coge un array y lo convierte en un objeto contacto
    public static function fromArray(array $data) {
        return new Contacto{
            $data['id']??null;
            $data['nombre']??'';
            $data['pellidos']??'';
            $data['correo']??'';
            $data['direccion']??'';
            $data['telefono']??'';
            $data['fecha_nacimiento']??'';
        }
    }

    // devuelve un array de objetos contacto
    public function findAll():?array{
        try{
            $this->conexion->consulta("SELECT * FROM contactos");
            $contactos = $this->extractAll();
        }
        catch(PDOException $e) {
            $contactos = null;
        }
        return $contactos;
    }

    public function extractAll(){
        $contactos = [];
        try{
            $contactosData = $this->conexion->extraer_todos();
            foreach ($contactosData as $contactoData) {
                $contactos[] = Contacto::fromArray($contactoData);
            }
        }
        cath(PDOException $err){
            $contactos = null;  
        }
        return $contactos;
    }

    public function showAll(){
        $contactos = $this->contact->findAll();
        $this->pages->render('contacto/showContacts',['contactos'=>$contactos]);
    }



}

