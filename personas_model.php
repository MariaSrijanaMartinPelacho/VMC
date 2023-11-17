<?php
//Llamada al modelo
require_once("models/personas_model.php");
$per=new personas_model();
$datos=$per->get_personas();
 
//Llamada a la vista
require_once("views/personas_view.phtml");

class personas_model {
    private $db;
    private $personas;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->personas = array();
    }

    public function get_personas() {
        $consulta = $this->db->query("SELECT * FROM alumno;");
        while ($filas = $consulta->fetch_assoc()) {
            $this->personas[] = $filas;
        }
        return $this->personas;
    }

    public function get_cursos() {
        $consulta = $this->db->query("SELECT * FROM cursos ;");
        $cursos = array();
        while ($filas = $consulta->fetch_assoc()) {
            $cursos[] = $filas;
        }
        return $cursos;
    }

    public function insert_persona($nombre, $apellidos, $dni, $curso) {
        // Aquí deberías escribir la lógica para insertar un alumno en la base de datos.
    }

    public function insert_curso($nombreCurso, $anioCurso) {
        // Aquí deberías escribir la lógica para insertar un curso en la base de datos.
    }
}
?>
