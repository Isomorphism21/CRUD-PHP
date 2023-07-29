<?php

require_once("../Conexion/conexion.php");
require_once("../Conexion/db.php");


class empleado extends conexion{
    private $id_empleado;
    private $nombre;
    private $telefono;
    private $cargo;

    public function __construct($id_empleado = 0, $nombre = "", $telefono = 0, $cargo = "", $dbCnx = ""){
        $this -> id_empleado = $id_empleado;
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> cargo = $cargo;
        parent::__construct($dbCnx);
    }

    public function setId_empleado($id_empleado){
        $this -> id_empleado = $id_empleado;
    }

    public function getId_empleado(){
        return $this -> id_empleado;
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

    public function setCargo($cargo){
        $this -> cargo = $cargo;
    }

    public function getCargo(){
        return $this -> cargo;
    }

    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO empleado(nombre, telefono, cargo) VALUES(?,?,?)");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> cargo]);
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function selectAll(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM empleado");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this -> dbCnx -> prepare("DELETE FROM empleado WHERE id_empleado = ?");
            $stm -> execute([$this -> id_empleado]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM empleado WHERE id_empleado = ?");
            $stm -> execute([$this -> id_empleado]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this -> dbCnx -> prepare("UPDATE empleado SET nombre = ?, telefono = ?, cargo = ? WHERE id_empleado = ?");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> cargo, $this -> id_empleado]);
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }
}

?>