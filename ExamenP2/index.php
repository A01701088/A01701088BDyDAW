<!DOCTYPE html>
<html>
<html lang="es-mx">

<head>
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="foundation.css">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Examen de segundo parcial</title>
</head>

<body>
    <header></header>

    <main>
    <input id="tableButton" class="alert button" type="submit" value="Mostrar Tabla(Ajax)" name="submit" onclick="sendRequest()">
    <div id="ajaxResponse">

    </div>

    <form id="f1" action="controller.php" method="POST">
        Ingresa los datos de tu nuevo zombie:
        <input type="text" placeholder="Nombre de Zombie" name="zomName">
        <input class="alert button" type="submit" value="Subir datos" name="submit">
    </form>
    <br><br>
    <h2>Consultar y meter estados</h2>
    <form id="f2" action="controller.php" method="POST">
        Cambiar estado
        <input type="text" placeholder="ID de Zombie" name="zomNameE">
        Estado a insertar(solo pueden ser: desmayo, desorientacion, infeccion, transformaccion, violencia)
        <input type="text" placeholder="Estado a Insertar" name="zomEst">
        
    <input class="alert button" type="submit" value="Subir datos" name="submit">
    </form>




        
    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    

</body>

</html>