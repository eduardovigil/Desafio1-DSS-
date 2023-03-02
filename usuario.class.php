<?php
//Creacion de la clase de los usuarios de la pagina
class Usuario{
    private $identificador;
    private $nombre;
    private $apellido;
    private $usuario;
    private $password;
//Crecion del constructor del usuario
    public function __construct($identificador, $nombre, $apellido, $usuario, $password){
        $this->identificador = $identificador;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->usuario = $usuario;
        $this->password = $password;
    }
//Creacion del get de los elementos del usuario
    public function getIdentificador(){
        return $this->identificador;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getPassword(){
        return $this->password;
    }
    public function autentificacionPassword($password){
        return $this->password === $password;
    }
}
//Creacion de instancias de los objetos usuarios
$persona1 = new Usuario("1","Fernando","Guebara","CheGuebara200","Guebara2564");
$persona2 = new Usuario("2","Paola","Martinez","PaolitaFresa254","FresitaPower");
$persona3 = new Usuario("3","Martin","Figueroa","MarFigue145","Guero7894");

//Guardando los objetos en el arreglo con el identificador de la cadena de usuarios

$usuarios = array($persona1,$persona2,$persona3);
?>