<?php


require_once "util.php";


echo "<h1>Laboratorio 18</h1>";



if(isset($_POST["submit"]) && !empty($_POST["submit"])){
    $_POST['vegName']=htmlspecialchars($_POST['vegName']);
    $_POST['vegC']=htmlspecialchars($_POST['vegC']);
    $_POST['vegPrice']=htmlspecialchars($_POST['vegPrice']);
    
    $nombre = $_POST['vegName'];
    $cant = $_POST['vegC'];
    $precio = $_POST['vegPrice'];

    //validar datos
    if(strlen($nombre)> 0 && strlen($cant)> 0 && strlen($precio)> 0 && is_numeric($cant) && is_numeric($precio)){

        if(insertarVegetal($nombre,$cant,$precio)){
            echo "<br>Se ha insertado correctamente su información";

        }
        else{
            echo "Error ";
        }


    }else
    echo "Error";



}

if(isset($_POST["submit2"])){
    $_POST['vegNameD']=htmlspecialchars($_POST['vegNameD']);
    $nombre = $_POST["vegNameD"];

    if(deleteDB($nombre)){
        echo "Dato borrado correctamente";
    }
    else{
        echo "No existe un vegetal con ese nombre";
    }


}
if(isset($_POST["submit3"])){
    $_POST['vegNO']=htmlspecialchars($_POST['vegNO']);
    $_POST['vegNN']=htmlspecialchars($_POST['vegNN']);
    $_POST['vegCN']=htmlspecialchars($_POST['vegCN']);
    $_POST['vegPN']=htmlspecialchars($_POST['vegPN']);
    $nombreO = $_POST["vegNO"];
    $nombreN= $_POST["vegNN"];
    $cantidadN = $_POST["vegCN"];
    $precioN = $_POST["vegPN"];

    //validar datos
    if(strlen($nombreO)> 0 && strlen($cantidadN)> 0 && strlen($precioN)> 0 && strlen($nombreN)> 0 && is_numeric($cantidadN) && is_numeric($precioN)){

        if(updateDB($nombreO,$nombreN,$cantidadN,$precioN)){
            echo "<br>Se ha actualizado correctamente su información";
    
        }
        else{
            echo "Error en subida a base de datos";
        }
    
    
    }else
    echo "Error en validacion de datos";
    

    
}


include("index.html");






    







?>

