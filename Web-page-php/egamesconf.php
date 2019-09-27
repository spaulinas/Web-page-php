<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
if(isset($_POST['submit'])) {
	$_SESSION['editgames']['name']=$_POST['name'];
    $_SESSION['editgames']['clubID']=$_POST['clubID'];
	} else {
     header("Location:index.php");
    }

?>
  <div>
 
        <h1>Powtierdź wprowadzone dane</h1>
         <p>Nazwa gry: <?php echo  $_SESSION['editgames']['name'] ?> </p>
         <p>Klub: 
                    <?php 
                    $club_sql="SELECT name FROM club WHERE clubID=".$_SESSION['editgames']['clubID'];
                    $club_query=mysqli_query($dbconnect, $club_sql);
                    $club=mysqli_fetch_assoc($club_query);
                    echo $club['name'];
                    ?> 
         </p>
        </div>    
    <?php 
    
?>

	
<p><a href="index.php?page=egamesup" >Potwierdź zmianę</a> | <a href="index.php?page=eclub" >Wróć z powrotem</a></p>