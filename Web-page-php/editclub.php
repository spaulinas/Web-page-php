<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	unset($_SESSION['editclub']);
	
	$editclub_sql="SELECT * FROM club";
	$editclub_query=mysqli_query($dbconnect, $editclub_sql);
	$editclub=mysqli_fetch_assoc($editclub_query);


?>

<h2>Wybierz kategorię, którą chcesz edytować:</h2>
<?php do {  ?>
<p><a href="index.php?page=eclub&clubID=<?php echo $editclub['clubID']; ?>"><?php echo $editclub['name'] ?></a></p>
<?php
}while ($editclub=mysqli_fetch_assoc($editclub_query)) ?>