<?php

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
    <label for="edad">Nombre</label>
    <input type="text" name="edad" id="edad"><br><br>
    
    </form>';

/*?>*/

/*<?php*/
if (isset($_GET['boton'])){
    $edad = $_GET['edad'];

}
else{
    echo 'No se ha introducido ningun dato';
}

$anyo=2022-10;
echo 'La edad actual es: '. $edad .'10 años antes tendras ' . $edad-22 . ' y el año ' . $edad-2022 . '10 años despues tendras ' . $edad+22 . 'y el año ' .$edad+2022 .
    ' y el año de jubilación será ' . $edad-67 .

?>


</body>
</html>



