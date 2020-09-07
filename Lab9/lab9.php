<?php function average(array $array){
    $average = array_sum($array) / count($array);
    $finalavg = ceil($average);

    echo $finalavg;



} 


?>
<?php function median(array $array){
    
   
    sort($array);
    $size = count($array);
    
    $medianVal = floor(($size-1)/2);
    if($size%2){
        echo $array[$medianVal];
    }
    else{
        $medianValLow = $array[$medianVal];
        $medianValHigh = $array[$medianVal + 1];

        echo(($medianValLow + $medianValHigh)/2);
    }
    


}
?>



<?php function Num(array $array){
    echo "<ul>";
    echo implode(', ', $array) . "<br>";
    echo "<li>";
    echo "Promedio: ";
    echo average($array);
    echo "</li><li>";
    echo "Mediana: ";
    echo median($array);
    echo "</li><li>";
    sort($array);
    echo "Menor a mayor: ";
    echo implode(', ', $array) . "<br>";
    echo "</li><li>";
    rsort($array);
    echo "Mayor a menor: ";
    echo implode(', ', $array) . "<br>";
    echo "</li></ul>";
}?>

<?php function cuadrado($num){


	echo "<table>";
	echo "<tr>";
	echo "<td>Numero</td>";
	echo "<td>Cuadrado</td>";
	echo"<td>Cubo</td>";
	echo "</tr>";
	for($i = 1;$i<=$num;$i++){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$i**2 ."</td>";
		echo "<td>". $i**3 ."</td>";
		echo "</tr>";


	}
	
	echo "</table>";
	



}
?>

<?php function invertido($num){
    
    echo strrev($num);
    


}?>

<!DOCTYPE html>

<head>
    <title>Lab 9</title>

</head>

<html>
    <body>
    <h1>Laboratorio 9</h1>





<h3>Prueba 1:</h3>
<?php Num([20, 50, 23, 53, 22, 89, 91, 11, 48])?>

<h3>Prueba 2:</h3>
<?php Num([5,21,10,85,9,2,34,78,83,12])?>

<h2>Tabla de Cuadrados de 10<h2>

    <?php cuadrado(10) ?>

<h2>Tabla de Cuadrados de 50<h2>
    <?php cuadrado(50) ?>

<h2>Invertidor de numeros<h2>
    <form action="lab9.php" method="get">
        Numero: <input type="text" name="num" value="0">
        <input type="submit">
    </form>
    <?php if(isset($_GET["num"])) 
        {
            
            $temp=($_GET["num"]);
        
        }  
    
        else {
            
            
            $temp=0;
    
        }

        invertido($temp);
    
    ?>


</body>
</html>
