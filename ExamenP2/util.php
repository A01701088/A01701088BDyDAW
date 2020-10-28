<?php

function dBC(){
    $servername = "localhost";
    $username = "id15254830_basedato";
    $password = "pk-iu@^Dl#e>)K0!";
    $dbname = "id15254830_examen";

    $con = mysqli_connect($servername,$username, $password, $dbname);

    if(!$con){
        die("Connection Failed: " . mysqli_connect_error());

    }
    return $con;

    
}
function closeDB($mysql){
    mysqli_close($mysql);
    
}

function getZombi(){

    $con = dBC();
    $sql = "SELECT * FROM ZombisID";
    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    
    return $result;

}


function addZombie($nomZombie){

    $con=dBC();
    $sql = "INSERT INTO ZombisID (NomZombie) VALUES (\"".$nomZombie."\");";

    if(mysqli_query($con, $sql)){
        echo "Nuevo dato ingresado correctamente";
        closeDB($con);
        return true;
    }
    else{
        echo "Error : " . $sql ." ". mysqli_error($con);
        closeDB($con);
        return false;
    }
    closeDB($con);

}
function getEstado(){

    $con = dBC();
    $sql = "SELECT * FROM ZombisIDEstado";
    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    
    return $result;

}
function addEstado($idZombie, $estado){

    $con=dBC();
    $sql = "INSERT INTO ZombisIDEstado(Estado, IDZombie) VALUES (\"".$estado."\",\"". $idZombie ."\");";;

    if(mysqli_query($con, $sql)){
        echo "Nuevo dato ingresado correctamente";
        closeDB($con);
        return true;
    }
    else{
        echo "Error : " . $sql ." ". mysqli_error($con);
        closeDB($con);
        return false;
    }
    closeDB($con);

}


?>