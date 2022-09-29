echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
    <style>
        table, th, td {
            border:1px solid black;
        }
        td{
            width: 50%;
        }
        table{
            margin:10px;
        }
    </style>
</head>
<body>

<form action="" method="get">
    <label for="nombre1">Nombre</label>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="nombre2">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"><br><br>
    <label for="nombre3">Email</label>
    <input type="text" name="email" id="email"><br><br>
    <label for="nombre4">Fecha nacimiento</label>
    <input type="text" name="aNacimiento" id="aNacimiento"><br><br>
    <label for="nombre5">telefono</label>
    <input type="text" name="telefono" id="telefono"> <br><br>
    <input type= "submit" name="boton" value="enviar"><br><br>
</form>';

/*?>*/

/*<?php*/
 if (isset($_GET['boton'])){
     $nombre = $_GET['nombre'];
     $apellidos = $_GET['apellidos'];
     $email = $_GET['email'];
     $aNacimiento = $_GET['aNacimiento'];
     $telefono = $_GET['telefono'];
 }
 else{
     echo 'No se ha introducido ningun dato';
 }
    echo '<table style="width:25%">
        <tr>
        <td>Nombre' . '</td>
         <td>' . $nombre . '</td>
        </tr>
        <tr>
        <td>Apellidos' .  '</td>
         <td>' . $apellidos . '</td>
        </tr>
         <tr>
         <td>Email ' .  '</td>
         <td>' . $email . '</td>
        </tr>
         <tr>
         <td>Año Nacimiento' .  '</td>
         <td>' . $aNacimiento . '</td>
        </tr>
         <tr>
         <td>Telefono'.  '</td>
         <td>' . $telefono . ' </td>
        </tr>

        </table>';

?>


</body>
</html>


