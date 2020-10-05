<?php


echo "<h1>Laboratorio 14</h1>";

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
    

//Obtener Consulta del Vegetal Cebolla

$resultVegetalNombre = getVegetalNombre("Cebolla");

echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Sola la información de Cebolla</h3>";


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

if(mysqli_num_rows($resultVegetalNombre) > 0){
    
while($row = mysqli_fetch_assoc($resultVegetalNombre)){
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

//Obtener informacion de los vegetales con un precio menor o igual a 4

$resultVegetalPrecio = getVegetalPrice(4);

echo '<div class="large-6 medium-6 cell">';
echo '<div class="primary callout">';
echo "<h3>Precios menor o iguales a $4</h3>";

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th> Nombre </th>";
echo "<th> Cantidad </th>";
echo "<th> Precio </th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

if(mysqli_num_rows($resultVegetalPrecio) > 0){
    
while($row = mysqli_fetch_assoc($resultVegetalPrecio)){
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

