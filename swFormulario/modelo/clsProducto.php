<?php
/**
 * Description of clsProducto
 *
 * @author Adrian Mu
 */
class clsProducto {
    //atributos
    private $nombre;
    private $correo;
    private $sexo;
    
    //metodos
    public function __construct() {}
    public function __GET($atr){return $this->$atr;}
    public function __SET($atr,$val){return $this->$atr = $val;}
}
