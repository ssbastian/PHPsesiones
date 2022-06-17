<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsConexion
 *
 * @author Laura
 */
class clsConexion {

    private $conexion;

    public function __construct() {

        $this->conexion = new mysqli('localhost', 'root', '', 'bdproductos'); // --> conexión para base de datos en mysql */
    }

    public function getConexion() {
        return $this->conexion;
    }

}
