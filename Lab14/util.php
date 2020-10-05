
<?php

function dBC(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vegetales";

    $con = mysqli_connect($servername,$username, $password, $dbname);

    if(!$con){
        die("Connection Failed: " . mysqli_connect_error());

    }
    return $con;

    
}
function closeDB($mysql){
    mysqli_close($mysql);
    
}

function getVegetal(){

    $con = dBC();
    $sql = "SELECT Nombre, Cantidad, Precio FROM vegetales";
    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    
    return $result;
}
    
    
    
    
function getVegetalNombre($vegetal_nombre){
    $con = dBC();
    $sql = "SELECT Nombre, Cantidad, Precio FROM vegetales WHERE Nombre = '$vegetal_nombre'";
    $result = mysqli_query($con, $sql);
    closeDb($con);
    return $result;
    
    
}
    
function getVegetalPrice($price){
    
    $con = dBC();
    $sql = "SELECT Nombre, Cantidad, Precio FROM vegetales WHERE Precio <= '$price'";
    $result = mysqli_query($con, $sql);
    closeDb($con);
    return $result;
    
}


?>

