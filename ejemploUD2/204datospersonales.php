<?php
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
echo '<style>
    table, th, td {
  border:1px solid black;
}
td{
    width: 50%;
}
table{
    margin:10px;
}
</style>';
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