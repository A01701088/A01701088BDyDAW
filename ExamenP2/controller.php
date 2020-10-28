<?php

require_once "util.php";
session_start();
include("index.php");




    if(isset($_POST["submit"]) && !empty($_POST["submit"]) && isset($_POST["zomName"])){
        $_POST['zomName']=htmlspecialchars($_POST['zomName']);
 
        
        $nombre = $_POST['zomName'];

 
    
        //validar datos
        if(strlen($nombre)> 0){
    
            if(addZombie($nombre)){
                echo "<br>Se ha insertado correctamente su información";
    
            }
            else{
                echo "Error ";
            }
    
    
        }else
        echo "Error";
    
    
    
    }





if(isset($_POST["submit2"])){
        $_POST['zomNE']=htmlspecialchars($_POST['zomNE']);
        $_POST['zomEst']=htmlspecialchars($_POST['zomEst']);
        
        $id = $_POST['zomNE'];
        $estado = $_POST['zomEst'];
 
    
        //validar datos
        if(strlen($id)> 0 && strlen($estado)> 0){
    
            if(addEstado($id, $estado)){
                echo "<br>Se ha insertado correctamente su información";
    
            }
            else{
                echo "Error ";
            }
    
    
        }else
        echo "Error";
    
    
    
    }

    if(isset($_POST["submit3"]) && isset($_POST["estEleg"])){
        $_POST['estEleg']=htmlspecialchars($_POST['estEleg']);
 
        
        $estado = $_POST['estEleg'];

        
        $_SESSION["estado"]=$estado;
        //validar datos
        if(strlen($estado)>0){
    
            if(conEstado($estado)){
                echo "<br>Aqui esta su consulta";
    
            }
            else{
                echo "Error 1";
            }
    
    
        }else
        echo "Error 2";
    
    
    
    }

?>