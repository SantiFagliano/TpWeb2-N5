<?php
use PHPUnit\Framework\TestCase;

require_once ("../BaseDeDatos.php");


class Test extends TestCase
{
    public function testConexionEstablecida(){
        $base= new BaseDeDatos();
        $prueba=$base->probarConexion();
        $this->assertEquals("Conexion exitosa con la base de datos", $prueba);
    }
}