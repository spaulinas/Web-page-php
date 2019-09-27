<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['gamesdel']['name'])) {
        $_SESSION['gamesdel']['name']="";
          $_SESSION['gamesdel']['gamesID']="";
    }

$delgames_sql="DELETE FROM games WHERE gamesID=".$_GET['gamesID'];
$delgames_query=mysqli_query($dbconnect, $delgames_sql);

?>



<p>Usunięto grę!<p>

 