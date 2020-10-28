<?php

require_once "util.php";



    if(isset($_POST["submit"]) && !empty($_POST["submit"])){
        $_POST['zomName']=htmlspecialchars($_POST['zomName']);
 
        
        $nombre = $_POST['zomName'];

 
    
        //validar datos
        if(strlen($nombre)> 0){
    
            if(addZombie($nombre)){
                echo "<br>Se ha insertado correctamente su información";
    
            }
            else{
                echo "Error ";
            }
    
    
        }else
        echo "Error";
    
    
    
    }

include("index.php");

$resultE = getEstado();
//Imprimir Tabla Completa
echo "<h2>Insertar Zombie</h2>";
echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Tabla de Estados</h3>";

//Crear Tabla
    
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Estado </th>";
    echo "<th> Fecha y Hora </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

if(mysqli_num_rows($resultE) > 0){
        
    while($row = mysqli_fetch_assoc($resultE)){
        echo "<tr>";
        echo "<td>" . $row["IDZombie"] . "</td>";
        echo "<td>" . $row["Estado"] . "</td>";
        echo "<td>" . $row["FechaHora"] . "</td>";


        echo "</tr>";


    }
}
//Cerrar Tabla
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    


    if(isset($_POST["submit"]) && !empty($_POST["submit"])){
        $_POST['zomNameE']=htmlspecialchars($_POST['zomNameE']);
        $_POST['zomEst']=htmlspecialchars($_POST['zomEst']);
        
        $id = $_POST['zomNameE'];
        $estado = $_POST['zomEst'];
 
    
        //validar datos
        if(strlen($nombre)> 0 && strlen($estado)> 0){
    
            if(addZombie($id, $estado)){
                echo "<br>Se ha insertado correctamente su información";
    
            }
            else{
                echo "Error ";
            }
    
    
        }else
        echo "Error";
    
    
    
    }

?>