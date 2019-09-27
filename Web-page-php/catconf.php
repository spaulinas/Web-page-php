<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

    //sprawdzenie czy dodano kategorię
    if(!isset($_POST['submit'])) {
        header("Location:index.php?page=admin");
    }

    //nowa sesja

    $_SESSION['catadd']['name']= $_POST['name'];

?>

<h2>Potwierdź wprowadzenie</h2>
<p>Dodano kategorię: <?php echo $_POST['name']; ?></p>
<p><a href="index.php?page=catadded">Potwierdź</a> | <a href="index.php?page=addcat">Wróć z powrotem</a></p>