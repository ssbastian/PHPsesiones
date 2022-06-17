<?php
require('modelo/clsFormularioAcceso.php');
/**
 * @author @juan
 */
class clsFormularioAcceso {

    private $conexion;

    public function __construct() {
        $this->conexion = new clsConexion();
    }

    public function listar() {
        $sql = 'SELECT * FROM PRODUCTO';

        $consulta = $this->conexion->getConexion()->query($sql);
        $listadoProductos = array();
        $i = 0;

        while ($item = $consulta->fetch_assoc()) {
            $listadoProductos[$i] = $item;
            $i++;
        }
        return $listadoProductos;
    }

    public function registrar() {
        session_start();

       // if (isset($_POST['register'])) {

            $username = $_POST['nombre'];
            $email = $_POST['correo'];
            $password = $_POST['sexo'];
            //$password_hash = password_hash($password, PASSWORD_BCRYPT);
              $sql = 'INSERT INTO (nombre, correo sexo) VALUES :nombre,:correo,:sexo';
              $consulta = $this->conexion->getConexion()->query($sql);
            /*
              $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
              $query->bindParam("email", $email, PDO::PARAM_STR);
              $query->execute();

              if ($query->rowCount() > 0) {
              echo '<p class="error">The email address is already registered!</p>';
              } */

            /*if ($query->rowCount() == 0) {
                $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
                $query->bindParam("username", $username, PDO::PARAM_STR);
                $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                $query->bindParam("email", $email, PDO::PARAM_STR);
                $result = $query->execute();

                if ($result) {
                    echo '<p class="success">Your registration was successful!</p>';
                } else {
                    echo '<p class="error">Something went wrong!</p>';
                }
            }*/
        //}
           return 0;
    }

}
