<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	unset($_SESSION['editcat']);
	
	$editcat_sql="SELECT * FROM category";
	$editcat_query=mysqli_query($dbconnect, $editcat_sql);
	$editcat=mysqli_fetch_assoc($editcat_query);


?>

<h2>Wybierz kategorię, którą chcesz edytować:</h2>
<?php do {  ?>
<p><a href="index.php?page=ecat&categoryID=<?php echo $editcat['categoryID']; ?>"><?php echo $editcat['name'] ?></a></p>
<?php
}while ($editcat=mysqli_fetch_assoc($editcat_query)) ?>