<html>
<html lang="en">

<head>
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="foundation.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <title>Examen de segundo parcial</title>
</head>

<body>

    <h1>Examen DAW</h1>





    </p>
    <div class="large-6 medium-6 cell">
        <h2>Insertar Zombie</h2>

        <form id="f1" action="controller.php" method="POST">
            Ingresa los datos de tu nuevo zombie:
            <input type="text" placeholder="Nombre de Zombie" name="zomName">
            <input class="alert button" type="submit" value="Subir datos" name="submit">
        </form>
        <button class="alert button" type="button" id="zomT"> Mostrar Tabla</button>
        <p id="ajaxResponse"></p>
    </div>

    
    <div class="large-6 medium-6 cell">
        <h2>Consultar y meter estados</h2>
        <form id="f2" action="controller.php" method="POST">
            Cambiar estado
            <input type="text" placeholder="ID de Zombie" name="zomNE">
            Estado a insertar(solo puede ser: desmayo, desorientacion, infeccion, transformacion, violencia)
            <input type="text" placeholder="Estado a Insertar" name="zomEst">

            <input class="alert button" type="submit" value="Subir datos" name="submit2">
        </form>
        <button class="alert button" type="button" id="metCon"> Mostrar Tabla Estados</button>
        <div id="meterEstados">
        </div>
    </div>
    <div class="large-6 medium-6 cell">
        <form id="f3" action="controller.php" method="POST">
            Consultar Estado (solo puede ser: desmayo, desorientacion, infeccion, transformacion, violencia)
            <input type="text" placeholder="Estado a Consultar" name="estEleg">


            <input class="alert button" type="submit" value="Subir datos" name="submit3">
        </form>
        <button class="alert button" type="button" id="consulta"> Mostrar Tabla de Consulta Estado </button>
        <div id="conEstado">
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>

</body>

</html>