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
<html lang = "es">

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

<h2>Invertidor de números<h2>
    <form action="lab9.php" method="get">
        Número: <input type="text" name="num" value="0">
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

<h2>Cuestionario</h2>

<h4>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h4>
<p>Phpinfo() es una función que te regresa todos tipos de datos sobre php en tu servidor. </p>
<p>INFO_LICENSE te regresa datos sobre la licencia en la que php está distribuida.</p>
<p>INFO_MODULES te regresa todos las extensiones y sus configuraciones correspondientes.</p>
<p>INFO_CREDITS te da los créditos de toda la gente que ha trabajado en php y sus apis.</p>

<h4>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h4>
<p>Tienes que asegurarte que tu servidor tenga un interpretador de PHP para poder recibir líneas de código en php.</p>

<h4>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h4>
<p>Cuando el servidor detecta que hay un archivo .php o un tag de php lo manda al interpretador de PHP para que corra el código y el servidor te manda los “resultados” que saco a correr ese código de php. </p>

<p></p>
</body>
</html>
