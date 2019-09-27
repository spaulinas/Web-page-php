<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	$editgames_sql="UPDATE games SET name='".$_SESSION['editgames']['name']."',clubID='".$_SESSION['editgames']['clubID']."' WHERE gamesID=".$_SESSION['editgames']['gamesID'];

    
   
	$editgames_querry=mysqli_query($dbconnect, $editgames_sql);
	
	unset($_SESSION['editgames']);
?>

<p>Zaktualizowano gry!</p>
