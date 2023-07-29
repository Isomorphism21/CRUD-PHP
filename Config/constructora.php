<?php

require_once("../Conexion/conexion.php");
require_once("../Conexion/db.php");


class constructora extends conexion{
    private $id_constructora;
    private $nombre;
    private $telefono;
    private $direccion;

    public function __construct($id_constructora = 0, $nombre = "", $telefono = 0, $direccion = "", $dbCnx = ""){
        $this -> id_constructora = $id_constructora;
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> direccion = $direccion;
        parent::__construct($dbCnx);
    }

    public function setId_constructora($id_constructora){
        $this -> id_constructora = $id_constructora;
    }

    public function getId_constructora(){
        return $this -> id_constructora;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function setTelefono($telefono){
        $this -> telefono = $telefono;
    }

    public function getTelefono(){
        return $this -> telefono;
    }

    public function setDireccion($direccion){
        $this -> direccion = $direccion;
    }

    public function getDireccion(){
        return $this -> direccion;
    }

    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO constructora(nombre, telefono, direccion) VALUES(?,?,?)");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> direccion]);
        } catch (Exception $e) {
            return $e -> getMessage();
        }
        
    }

    public function selectAll(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM constructora");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this -> dbCnx -> prepare("DELETE FROM constructora WHERE id_constructora = ?");
            $stm -> execute([$this -> id_constructora]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM constructora WHERE id_constructora = ?");
            $stm -> execute([$this -> id_constructora]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this -> dbCnx -> prepare("UPDATE constructora SET nombre = ?, telefono = ?, direccion = ? WHERE id_constructora = ?");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> direccion, $this -> id_constructora]);
            
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }
}

?>