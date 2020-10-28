<?php
session_start();
require_once('util.php');
$estado=$_SESSION["estado"];

$result = conEstado($estado);
//Imprimir Tabla Completa

echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Tabla Consultas Estado</h3>";

//Crear Tabla
    
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Nombre </th>";

    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

if(mysqli_num_rows($result) > 0){
        
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["IDZombie"] . "</td>";
        echo "<td>" . $row["Estado"] . "</td>";


        echo "</tr>";


    }
}
//Cerrar Tabla
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
?>