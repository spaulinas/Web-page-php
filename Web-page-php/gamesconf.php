<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }


    //nowa sesja
    if(isset($_POST['submit'])){
    $_SESSION['gamesadd']['name']= $_POST['name'];
    $_SESSION['gamesadd']['clubID']=$_POST['clubID'];
    }
?>

<h2>Potwierdź wprowadzenie</h2>
<p>Dodano nową grę: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=gamesadded">Potwierdź</a> | <a href="index.php?page=gamesadd">Wróć z powrotem</a></p>