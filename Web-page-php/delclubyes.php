<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['clubadd']['name'])) {
        $_SESSION['clubadd']['name']="";
    }

$delclub_sql="DELETE FROM club WHERE clubID=".$_GET['clubID'];
$delclub_query=mysqli_query($dbconnect, $delclub_sql);

$delclub_sql="DELETE FROM games WHERE clubID=".$_GET['clubID'];
$delclub_query=mysqli_query($dbconnect, $delclub_sql);

?>



<p>Usunięto klub!</p>

 