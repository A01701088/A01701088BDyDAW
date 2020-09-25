<?php 

session_start();

include("main2.html");

?>

<?php 
if(isset($_SESSION["imgName"]) && $_SESSION["imgDir"]){
echo "<h3>" . $_SESSION["imgName"] . "</h3>";
echo '<br><img src=" ' . $_SESSION["imgDir"] . '">';
}
?>

<?php 

session_unset();
session_destroy();



?>