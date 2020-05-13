<?php include("php/db.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header>
            <div class="card header">
                <div class="card-header">
                    Por favor ingresa tus datos para realizar tu registro.
                </div>
            </div>
        </header>


        <!--MOSTRAR  MENSAJE-->
        <?php if (isset($_SESSION['mensaje'])) : ?>

            <div class="container alert alert-<?php echo $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['mensaje']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!--LIMPIAR LOS DATOS DE LA SESSION-->
            <?php session_unset(); ?>

        <?php endif; ?>

        <form action="php/saveinfo.php" method="POST">
            <!-- Nombres -->
            <div class="form-row">
                <!-- Nombre1 -->
                <div class="form-group col-md-6">
                    <label for="nombre1" class="fw">Primer nombre</label>
                    <input type="text" name="nombre1" class="form-control" id="nombre1" placeholder="Pepito" required pattern="[A-Za-z]{4,40}">
                </div>
                <!-- Nombre2 -->
                <div class="form-group col-md-6">
                    <label for="nombre2">Segundo nombre</label>
                    <input type="text" name="nombre2" class="form-control" id="nombre2" placeholder="Perencejo">
                </div>
            </div>

            <!-- Apellidos -->
            <div class="form-row">
                <!-- Apellido1 -->
                <div class="form-group col-md-6">
                    <label for="apellido1">Primer apellido</label>
                    <input type="text" name="apellido1" class="form-control" id="apellido1" placeholder="Perez" required pattern="[A-Za-z]{4,40}">
                </div>
                <!-- Apellido2 -->
                <div class="form-group col-md-6">
                    <label for="apellido2">Segundo apellido</label>
                    <input type="text" name="apellido2" class="form-control" id="apellido2" placeholder="Palacios" required pattern="[A-Za-z]{4,40}">
                </div>
            </div>


            <!-- email y password-->
            <div class="form-row">
                <!-- e-mail -->
                <div class="form-group col-md-6">
                    <label for="email">Correo electronico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Pepitoperez1@correo.com" required>
                </div>
                <!-- password -->
                <div class="form-group col-md-6">
                    <label for="pass">Contraseña </label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="PepitoPerez025" required>
                    <p class="mensaje text-danger">*La contraseña debe tener más de 8 caracteres</p>
                </div>
            </div>

            <!-- Fecha y sexo-->
            <div class="form-row">
                <!-- Fechanac -->
                <div class="form-group col-md-6">
                    <label for="fechanac">Fecha de nacimiento</label>
                    <input type="date" name="fechanac" class="form-control" id="fechanac" required>
                </div>
                <!-- Sexo -->
                <div class="form-group col-md-6">
                    <label for="sexo">Sexo</label>
                    <select id="sexo" name="sexo" class="form-control" required>
                        <option selected>Masculino...</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>

            <div class="centrar col-md-12">
                <!-- Radio mayor de 18-->
                <h6>¿Eres mayor de 18?</h3>


                    <div class="centrar col-md-12">
                        <!-- SI -->
                        <div class="form-check form-check-inline">
                            <input type="radio" id="radiosi" name="radio" value="si" required>
                            <label for="radiosi">Si</label>
                        </div>

                        <!-- NO-->
                        <div class="form-check form-check-inline">
                            <input type="radio" id="radiono" name="radio" value="no" required>
                            <label for="radiono">No</label>
                        </div>

                    </div>


                    <!-- Terminos y condiciones -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="acept_term" name="acept_term" required>
                        <label class="form-check-label" for="acept_term">
                            Acepto Los <a href="#">Terminos y condiciones</a>
                        </label>
                    </div>

                    <!-- Boton Registrar -->
                    <input disabled type="submit" class="registrar btn btn-primary" id="boton_registrar" name="boton_registrar" value="Registrar">
            </div>


        </form>




    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/app.js"></script>
</body>



</html>