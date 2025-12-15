<?php
require_once 'mConexion.php'; // Asegúrate que la ruta sea correcta según tu estructura

class MLogin extends Conexion {

    public function validarUsuario($password){
        
        // Contraseña, escribe lo siguiente: ' OR '1'='1
        $sql = "SELECT password FROM usuarios WHERE password = '" . $password . "'";

        // Usamos query() en lugar de prepare() para ejecutar la consulta
        $stmt = $this->conexion->query($sql);

        // Verificamos si la consulta devolvió alguna fila (rowCount > 0)

        if($stmt->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}
?>