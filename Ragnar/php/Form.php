<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users</title>
  </head>
  <body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "test");
    // Check connection
    if ($con==false) {
        die("Error de conexion");
    }

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Creacion de Variables
            $Validation=$_POST['verificacion'];
            //Se escapan caracteres especiales
            $User=mysqli_real_escape_string($con, $_POST['usuario']);
            $Password=mysqli_real_escape_string($con, $_POST['contrasena']);
            $Email=mysqli_real_escape_string($con, $_POST['email']);
            $Date=mysqli_real_escape_string($con, $_POST['fecha']);
            $Ciudad=mysqli_real_escape_string($con, $_POST['ciudad']);

            $sql="INSERT INTO `usuario` (`ID`, `Usuario`, `Contrasena`, `Email`, `Fecha`, `Ciudad`) VALUES ('', '$User', '$Password', '$Email', '$Fecha', '$Ciudad')";
            echo $sql;

            if (($result = mysqli_query($con, $sql))===false) {
                die("Error:" .mysql_error($con));
            }

            while ($row=mysql_fetch_assoc($result)) {
                print_r($row);
            }

            mysql_free_result($result);
            mysqli_close($con);
        }
    }
    ?>
      </body>
    </html>
