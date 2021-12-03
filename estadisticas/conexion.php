<?php
    class conexion{
        private $servidor;
        private $usuario;
        private $contrasena;
        private $basedatos;
        public $conexion;
        public function __construct(){
            $this->servidor = "bxec8kf0gltlhhsgngsn-mysql.services.clever-cloud.com";
            $this->usuario = "ublssitbvwxpxjcf";
            $this->contrasena = "yWFy3KRFzjNXbOzHXFQX";
            $this->basedatos = "bxec8kf0gltlhhsgngsn";
        }
        function conectar(){
            $this->conexion = new mysqli($this->servidor,$this->usuario,$this->contrasena,
            $this->basedatos);
            $this->conexion->set_charset("utf8");
        }
        function cerrar(){
            $this->conexion->close();
        }
    }
?>