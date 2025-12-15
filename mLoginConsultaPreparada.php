<?php

    require_once 'mConexion.php';

    class MLogin extends Conexion {

        public function validarUsuario($password){

            $sql = "
                SELECT password
                FROM usuarios
                WHERE password = :password
            ";

            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);

            $exito = $stmt->execute();

            if($exito){
                return true;
            }else{
                return false;
            }
        }
    }