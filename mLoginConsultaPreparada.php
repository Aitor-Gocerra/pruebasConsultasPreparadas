<?php

    require_once 'mConexion.php';

    class MLogin extends Conexion {

        public function validarUsuario($password){

            // CORRECCIÓN: Usamos un marcador de posición (:password) en lugar de concatenar la variable directamente.
            $sql = "
                SELECT password 
                FROM usuarios 
                WHERE password = :password
            ";

            $stmt = $this->conexion->prepare($sql);

            $stmt->bindParam(':password', $password, PDO::PARAM_STR);

            $stmt->execute();

            $resultado = $stmt->fetch();

            if($resultado){
                return true;
            }else{
                return false;
            }
        }
    }
?>