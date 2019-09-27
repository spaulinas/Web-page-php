<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

    	unset($_SESSION['editgames']);
       if(!isset($_SESSION['editgames'])) {
        $_SESSION['editgames']['name']="";
    }


	
	$editgames_sql="SELECT * FROM games ORDER by name";
	$editgames_query=mysqli_query($dbconnect, $editgames_sql);
	$editgames=mysqli_fetch_assoc($editgames_query);


?>

<h2>Wybierz grę, którą chcesz edytować:</h2>
<?php do {  ?>
<p id="games"><a href="index.php?page=egames&gamesID=<?php echo $editgames['gamesID']; ?>"><?php echo $editgames['name'] ?></a></p>
<?php
}while ($editgames=mysqli_fetch_assoc($editgames_query)) ?>