<?php

require_once('connect.php');

echo '
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=5.0" name=viewport>

        <title>BASIC CRUD Application</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>
    
    <body class="">
        <div class="container padding-30">
        <nav class="header-navigation navbar navbar-expand-lg mb-70">
            <a href="https://crud51272.000webhostapp.com/" target="_blank" class="navbar-brand"><img
                    src="images/logo2.png"
                    alt="CUN Logo" width="160"></a>
            <button class="nav__hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon flex align-items-center justify-content-center">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse navigation-container" id="navbarSupportedContent">
                <ul class="navbar-nav navigation">
                    <li class="nav-item"><a href="#" class="nav-item__link nav-link" target="_blank">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-item__link nav-link" target="_blank">Listar</a></li>
                    <li class="nav-item"><a href="#" class="nav-item__link nav-link" target="_blank">Insertar</a></li>
                    <li class="nav-item"><a href="#" class="button button--primary nav-item__link nav-link" target="_blank">Actualizar</a></li>
                </ul>
            </div>
        </nav>
        </div>

        <div>
';

$sql = "SELECT * FROM Personas";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<table class="table table-striped">';
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Cedula</th>";
                echo "<th>Nombres</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Correo</th>";
                echo "<th>Direccion</th>";
                echo "<th>Telefono</th>";
                echo "<th>Fecha nacimiento</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['idpersona'] . "</td>";
                echo "<td>" . $row['cedula'] . "</td>";
                echo "<td>" . $row['nombres'] . "</td>";
                echo "<td>" . $row['apellidos'] . "</td>";
                echo "<td>" . $row['correo'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['fecha_nacimiento'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

echo '
    </div>
    </body>

    <footer class="footer full-width flex flex-column justify-content-center align-items-center">
    </footer>
</html>
';

// Close connection
mysqli_close($link);
?>