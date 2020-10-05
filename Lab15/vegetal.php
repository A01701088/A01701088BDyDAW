<?php


echo "<h1>Laboratorio 15</h1>";

require_once "util.php";



if(isset($_POST["submit"]) && !empty($_POST["submit"])){

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
    $nombre = $_POST["vegNameD"];

    if(deleteDB($nombre)){
        echo "Dato borrado correctamente";
    }
    else{
        echo "No existe un vegetal con ese nombre";
    }


}
if(isset($_POST["submit3"])){
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








$result = getVegetal();



//Imprimir Tabla Completa
echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Tabla completa de Vegetales</h3>";

//Crear Tabla
    
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> Nombre </th>";
    echo "<th> Cantidad </th>";
    echo "<th> Precio </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

if(mysqli_num_rows($result) > 0){
        
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Cantidad"] . "</td>";
        echo "<td>$" . $row["Precio"] . "</td>";
        echo "</tr>";


    }
}
//Cerrar Tabla
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    
include("index.html");


?>

