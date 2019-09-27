<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }



    if(!isset($_SESSION['catadd']['name'])) {
        $_SESSION['catadd']['name']="";
    }

$delcat_sql="DELETE FROM category WHERE categoryID=".$_GET['categoryID'];
$delcat_query=mysqli_query($dbconnect, $delcat_sql);


$delcat_sql="DELETE FROM club WHERE categoryID=".$_GET['categoryID'];
$delcat_query=mysqli_query($dbconnect, $delcat_sql);
?>



<p>Usunięto kategorię!<p>
 