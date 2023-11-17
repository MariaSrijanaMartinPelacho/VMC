<?php
set_include_path(get_include_path(). PATH_SEPARATOR. 'c:\xampp\htdocs\PRIMERMVC\db');
require_once("db.php");

class PersonasController{
    private $db_connection;
    //constructor
    public function __construct()
    {
        //iniciamos la conexión con la class que hay en el db.php
        $this->db_connection = Conectar::conexion();
    }

    //funcion para rellenar la matricula
    public function matricula ($Name, $LastName, $DNI,$Curs){
        $sql = "INSERT INTO alumnos (nombre, apellidos, dni, curso) VALUES (?,?,?,?)";
        /*stmt es una variable generalmente se usa para representar una declaración preparada.
          Una declaracion preparada es una instanncia de la clase 'PDOStatment' q se utuliza 
          para ejecutar consultas SQL preparadas.
          prepare($sql) este metodo prepara una consulta SQL para su ejecución y devuelve un 
          objeto 'PDOStatement' asociado con esa consulta.*/
        $stmt = $this->db_connection->prepare($sql);
        if(!$stmt){
            return "Error al preparar la consulta SQL";
        }
        $stmt->bind_param ("ssss", $Nick,$Email,$hash,$hash);
        $stmt->execute();
        $stmt->close();

    }
    //función para ver si ese alumno hizo ya la matricula
    public function exist ($Name, $LastName){

    }

    //funcion para hacer cursos nuevos
    public function new_curs($NameCurs ,$Year){

    }
    //funcion para ver si ya existe el curso
    public function exist_curs($NameCurs ,$Year){

    }
    //función para eliminar curso
    public function delete ($NameCurs, $Year){

    }

}

?>

