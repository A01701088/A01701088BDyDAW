
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

function getVegetalArray(){

    $con = dBC();
    $sql = "SELECT Nombre FROM vegetales";
    $result = mysqli_query($con, $sql);
    
    $row = $result->fetch_all();
    
    $vegArr = arrayFlatten($row);
   
    
    
    closeDB($con);
    
    return $vegArr;
}

function arrayFlatten($array) { 
    if (!is_array($array)) { 
      return FALSE; 
    } 
    $result = array(); 
    foreach ($array as $key => $value) { 
      if (is_array($value)) { 
        $result = array_merge($result, arrayFlatten($value)); 
      } 
      else { 
        $result[$key] = $value; 
      } 
    } 
    return $result; 
  } 

function insertarVegetal($nombre, $cantidad, $precio){
    $con = dBC();
    $sql = "INSERT INTO vegetales (Nombre, Cantidad, Precio) VALUES (\"".$nombre."\",\"". $cantidad ."\",\"".$precio."\" );";;

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

function deleteDB($nombre){
    $con =dBC();
    $sql = "DELETE FROM vegetales WHERE Nombre = '".$nombre."'";

    $result = mysqli_query($con, $sql);
    
    closeDB($con);
    return $result;


}

function updateDB($nombre,$nombreN, $cantidad, $precio){
    $con = dBC();
    $sql = "UPDATE vegetales SET Nombre='$nombreN',Cantidad=$cantidad,Precio=$precio WHERE Nombre = '$nombre'";
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

