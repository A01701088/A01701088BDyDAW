<?php 
    function validatePW($p1){
        if(strlen($p1)>=6){
            if(!ctype_upper($p1) && !ctype_lower($p1)){
                if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $p1))
                {
                    
                    return TRUE;;
                }
                else{
                    echo "Asegurate que tu contraseña tenga 6 o más caracteres, tenga por lo menos un numero, una letra mayuscula y una letra miniscula";
                }
            
            }
            else{
                echo "Asegurate que tu contraseña tenga 6 o más caracteres, tenga por lo menos un numero, una letra mayuscula y una letra miniscula";
            }

        }
        else{
            echo "Asegurate que tu contraseña tenga 6 o más caracteres, tenga por lo menos un numero, una letra mayuscula y una letra miniscula";



        }
    }
  
include("_main.html");

if(isset($_POST["p1"])&& !empty($_POST["p1"])){
    $_POST["p1"]=htmlspecialchars($_POST["p1"]);
    $_POST["p2"]=htmlspecialchars($_POST["p2"]);

    $p1=$_POST["p1"];
    $p2=$_POST["p2"];

        if(validatePW($p1)){
            if(!strcmp($p1,$p2)){
                echo "¡Las contraseñas coinciden y son seguras!";
                
            }
            else{
                echo "No coinciden tus contraseñas";

            }

        }    
        
        
    }
    

?>
