<?php
require_once 'mConexion.php'; // Asegúrate que la ruta sea correcta según tu estructura

class MLogin extends Conexion {

    public function validarUsuario($password){
        
        // VULNERABILIDAD: Concatenamos directamente la variable $password en la cadena SQL.
        // Esto permite que símbolos como ' alteren la lógica de la consulta.
        $sql = "SELECT password FROM usuarios WHERE password = '" . $password . "'";

        // Usamos query() en lugar de prepare() para ejecutar la consulta tal cual
        $stmt = $this->conexion->query($sql);

        // Verificamos si la consulta devolvió alguna fila (rowCount > 0)
        // Nota: rowCount no siempre es fiable en todos los drivers, pero en MySQL con PDO suele funcionar bien para SELECT.
        // Alternativamente podríamos usar $stmt->fetch().
        if($stmt && $stmt->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}
?>