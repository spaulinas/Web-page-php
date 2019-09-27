<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
	$_SESSION['editcat']['name']=$_POST['name'];

?>

<p>Uaktualnić nazwę kategorii: <?php echo $_SESSION['editcat']['name']; ?></p>
<p><a href="index.php?page=ecatup" >Potwierdź zmianę</a> | <a href="index.php?page=ecat" >Wróć z powrotem</a></p>