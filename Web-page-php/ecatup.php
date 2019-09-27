<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	$editcat_sql="UPDATE category SET name='".$_SESSION['editcat']['name']."' WHERE categoryID=".$_SESSION['editcat']['categoryID'];
   
	$editcat_querry=mysqli_query($dbconnect, $editcat_sql);
	
	unset($_SESSION['editcat']);
?>

<p>Zaktualizowano kategorię!<p>
