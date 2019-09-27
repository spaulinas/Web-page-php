<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

    //sprawdzenie czy dodano kategorię
    if(!isset($_SESSION['gamesadd']['name'])) {
        header("Location:index.php?page=admin");
    }

    //dodanie gry do bazy
    $newgame_sql="INSERT INTO games (name, clubID) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['gamesadd']['name'])."','".mysqli_real_escape_string($dbconnect,$_SESSION['gamesadd']['clubID'])."')";

    $newgame_querry=mysqli_query($dbconnect, $newgame_sql);
    unset($_SESSION['gamesadd']['name']);
                                                                        
?>

<p>Dodano nową grę do bazy.</p>
