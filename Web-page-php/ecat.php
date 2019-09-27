<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }
	if(isset($_GET['categoryID'])) {
	$_SESSION['editcat']['categoryID']=$_GET['categoryID'];
	}
//
	if(!isset ($_SESSION['editcat']['name'])) {
	$editcat_sql="SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
	$editcat_query=mysqli_query($dbconnect, $editcat_sql);
	$editcat=mysqli_fetch_assoc($editcat_query);
	$_SESSION['editcat']['name']=$editcat['name'];
	}

?>

<h2>Zmień nazwę kategorii:</h2>
<form action="index.php?page=ecatconf" method="POST">
	<p><input type="text" name="name" value="<?php echo $_SESSION['editcat']['name']; ?>" />
        <input type="submit" name="update" value="Wprowadź zmiany"></p>

</form>