<?php

include ("modelo/clsConexion.php");
include ("modelo/clsProducto.php");

/**
 * Description of clsProductoAcceso
 *
 * @author juan
 */
class clsProductoCRUD {

    //variables
    private $conexion;
    private $auxPDO;

    //metodos
    public function __construct() {
        $this->conexion = new clsConexion('localhost', 'bdproductos', 'root', '');
        $this->conexion->conectar();
        $this->auxPDO = $this->conexion->conexionPDO;
    }
    
    /**
     * metodo que retorna la lista de usuarios registrados
     * @return \clsProducto
     */
    public function Listar() {
        $consulta = $this->auxPDO->prepare("SELECT * FROM formulario");
        $consulta->execute();
        $resultado = array();
        foreach ($consulta->fetchALL(PDO::FETCH_OBJ) as $obj) {
            $auxProducto = new clsProducto();
            $auxProducto->__SET('nombre', $obj->nombre);
            $auxProducto->__SET('correo', $obj->correo);
            $auxProducto->__SET('sexo', $obj->sexo);
            $resultado [] = $auxProducto;
        }
        return $resultado;
    }
    
    /**
     * funcion que registra un nuevo usuario
     * @param type $obj
     */
    public function Crear($obj) {
        try {
            $consulta = "INSERT INTO formulario (nombre, correo, sexo) VALUES (?, ?, ?)";
            $this->auxPDO->prepare($consulta)->execute(array(
                $obj->nombre,
                $obj->correo,
                $obj->sexo
            ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /*
      public function Actualizar($obj){
      try{
      $consulta = "UPDATE producto SET nombre=?, precio=?  WHERE codigo = ?";
      $this->auxPDO->prepare($consulta)->execute(array(
      $obj->nombre,
      $obj->precio,
      $obj->codigo));
      }
      catch(Exception $e){
      die($e->getMessage());
      }
      }
      public function Eliminar($codigo){
      try{
      $consulta = "DELETE FROM producto WHERE codigo =?";
      $this->auxPDO->prepare($consulta)->
      execute(array($codigo));
      }
      catch(Exception $e){
      die($e->getMessage());
      }

      } */
}
