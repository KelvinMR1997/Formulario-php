<?php
//Se importa el archivo de conexion
include("db.php");


if (isset($_POST['boton_registrar'])) {

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $pass = sha1($_POST['pass']) ;
    $fechanac = $_POST['fechanac'];
    $sexo = $_POST['sexo'];

    //Validaciones 

    if ($nombre1 == "" || $apellido1 == "" || $apellido2 == "" || $email == "" || $pass == "" || $fechanac == "" || $sexo == "") {
        //mostrar mensaje
        $_SESSION['mensaje'] = 'Por favor complete todos los datos';
        $_SESSION['tipo_mensaje'] = 'danger';

        $_POST['boton_registrar'];
        //redireccionar
        header('Location: ../index.php');
        die();
    }

    //Query

    $query = "INSERT INTO usuario(PRIMER_NOMBRE,SEGUNDO_NOMBRE,PRIMER_APELLIDO,SEGUNDO_APELLIDO,CORREO,CONTRASENA,FECHA_NAC,SEXO) VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$email','$pass','$fechanac','$sexo')";


    //realizas la consulta en al base de datos
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Algo anda mal');
    }
    //mostrar mensaje
    $_SESSION['mensaje'] = 'Sus datos han sido registrados exitosamente';
    $_SESSION['tipo_mensaje'] = 'success';

    //redireccionar
    header('Location: ../index.php');
}

?>