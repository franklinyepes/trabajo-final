<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    /*en este campo procedemos a la conexion*/
    include("conexion.php");

    /*traemos los datos pedidos en el formulario html*/
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    /*insertamos los datos de las variables en el servidor*/
    $insertar= "INSERT INTO tblprueba(nombre, apellido) values ('$nombre', '$apellido')";
    if ($mysqli->query($insertar) === true){
        echo "Surreteee";
    }
    else {
        echo "Malo";
    }
    echo "<br>";
    
    /*imprimimos los datos recolectados*/
    $mitabla = "SELECT * FROM tblprueba ";
    $resultado = mysqli_query($mysqli, $mitabla);
    echo"<table border = 1px>";
        
            while($row=mysqli_fetch_assoc($resultado)){
                echo"<tr>"; 
                    echo"<td>"; echo $row["id"]; echo"</td>";
                    echo"<td>"; echo $row["nombre"]; echo"</td>";
                    echo"<td>"; echo $row["apellido"]; echo"</td>";
                echo"</tr>";
            }
        
    echo"</table>";
  

?>
</body>
</html>

