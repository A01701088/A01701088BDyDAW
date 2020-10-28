<?php
require_once "util.php";
$resultE = getEstado();
//Imprimir Tabla Completa
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

?>
    