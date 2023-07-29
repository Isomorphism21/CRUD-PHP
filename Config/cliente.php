<?php

require_once("../Conexion/conexion.php");
require_once("../Conexion/db.php");


class clientes extends conexion{
    private $id_cliente;
    private $nombre;
    private $telefono;
    private $NIT;

    public function __construct($id_cliente = 0, $nombre = "", $telefono = 0, $NIT = "", $dbCnx = ""){
        $this -> id_cliente = $id_cliente;
        $this -> nombre = $nombre;
        $this -> telefono = $telefono;
        $this -> NIT = $NIT;
        parent::__construct($dbCnx);
    }

    public function setId_cliente($id_cliente){
        $this -> id_cliente = $id_cliente;
    }

    public function getId_cliente(){
        return $this -> id_cliente;
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

    public function setNIT($NIT){
        $this -> NIT = $NIT;
    }

    public function getNIT(){
        return $this -> NIT;
    }

    public function insertData(){
        try {
            $stm = $this -> dbCnx -> prepare("INSERT INTO cliente(nombre, telefono, NIT) VALUES(?,?,?)");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> NIT]);
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function selectAll(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM cliente");
            $stm -> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this -> dbCnx -> prepare("DELETE FROM cliente WHERE id_cliente = ?");
            $stm -> execute([$this -> id_cliente]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm = $this -> dbCnx -> prepare("SELECT * FROM cliente WHERE id_cliente = ?");
            $stm -> execute([$this -> id_cliente]);
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this -> dbCnx -> prepare("UPDATE cliente SET nombre = ?, telefono = ?, NIT = ? WHERE id_cliente = ?");
            $stm -> execute([$this -> nombre, $this -> telefono, $this -> NIT, $this -> id_cliente]);
        } catch (Exception $e) {
            return $e -> getMessage();
        }
    }
}

?>