<?php
    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'db_crudconvuejs');
            define('usuario', 'root');
            define('password', '');
            define('puerto', 3306);
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{

                $conexion = new PDO("mysql:host=".servidor.";port=".puerto.";dbname=".nombre_bd, usuario, password, $opciones);
                return $conexion;
            }catch (Exception $e){
                return $e->getMessage();            
            }
        }
    }
?>