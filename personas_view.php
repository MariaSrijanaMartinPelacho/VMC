<?php
set_include_path(get_include_path() . PATH_SEPARATOR. 'C:\xampp\htdocs\PRIMERMVC\models');
require_once('personas_model.php');

if(isset($_POST['registro'])){
    $Name = $_POST['nombre'];
    $LastName = $_POST['apellidos'];
    $DNI = $_POST['dni'];
    $Curs = $_POST['curso'];
}
else if(isset($_POST['registro_curso'])){
    $NameCurs = $_POST['nombre_cur'];
    $Year = $_POST['año'];
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Personas</title>
    </head>
    <body>
        <h1>Formulario para Alumnos</h1>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" required><br>
            <label for="dni">DNI:</label>
            <input type="text" name="dni" required><br>
            <label for="curso">Curso:</label>
            <input type="text" name="curso" required><br>
            <input type="submit" value="Guardar">
        </form>
        <form method="post">
            <input type="submit" value="Registrar" name="registro">
        </form>
        <h1>Formulario para Curso</h1>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre_cur" required><br>
            <label for="apellidos">Año:</label>
            <input type="text" name="año" required><br>
        </form>
        <form method="post">
            <input type="submit" value="Registrar" name="registro_cur">
        </form>
    </body>
</html>
