$(document).ready(function () {





    $('#zomT').click(function () {
        $.ajax({
            type: "POST", // Method type GET/POST           
            url: "createTable.php", //Ajax Action url
            
            success: function (data) {
                $("#ajaxResponse").html(data);
            }
        });
    });
    $('#consulta').click(function () {
        $.ajax({
            type: "POST", // Method type GET/POST           
            url: "createConEstado.php", //Ajax Action url
            
            success: function (data) {
                $("#conEstado").html(data);
            }
        });
    });
    $('#metCon').click(function () {
        $.ajax({
            type: "POST", // Method type GET/POST           
            url: "meterEstado.php", //Ajax Action url
            
            success: function (data) {
                $("#meterEstados").html(data);
            }
        });
    });
   


});