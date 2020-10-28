<?php

require_once('util.php');

$result = getZombi();
//Imprimir Tabla Completa
echo "<h1>Examen DAW</h1>";
echo "<h2>Insertar Zombie</h2>";
echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Tabla de Zombies</h3>";

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
        echo "<td>" . $row["ID_Zombie"] . "</td>";
        echo "<td>" . $row["NomZombie"] . "</td>";


        echo "</tr>";


    }
}
//Cerrar Tabla
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
?>