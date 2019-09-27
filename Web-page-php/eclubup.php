<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	$editclub_sql="UPDATE club SET name='".$_SESSION['editclub']['name']."',categoryID='".$_SESSION['editclub']['categoryID']."',city='".$_SESSION['editclub']['city']."',address='".$_SESSION['editclub']['address']."',day='".$_SESSION['editclub']['day']."',description='".$_SESSION['editclub']['description']."' WHERE clubID=".$_SESSION['editclub']['clubID'];

    
   
	$editclub_querry=mysqli_query($dbconnect, $editclub_sql);
	
	unset($_SESSION['editclub']);
?>

<p>Zaktualizowano klub.<p>
