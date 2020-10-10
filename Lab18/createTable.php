<?php

require_once "util.php";
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




    

?>