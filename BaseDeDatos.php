<?php

class BaseDeDatos
{
    private $host;
    private $bddNombre;
    private $usuario;
    private $clave;
    private $conexion;

    public function __Construct()
    {
        $this->host = "localhost:3306";
        $this->bddNombre = "SmiteDexSantiagoFagliano";
        $this->usuario = "root";
        $this->clave = "santiago1234";

        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->bddNombre);
    }

    public function probarConexion()
    {
        if ($this->conexion->connect_error) {
            $result = "ocurrio un error al conectarse en la base de datos";
        } else {
            $result = "Conexion exitosa con la base de datos";
        }
        return $result;
    }
}