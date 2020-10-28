<?php
require_once "util.php";
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
?>

