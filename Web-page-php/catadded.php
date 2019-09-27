<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

    //sprawdzenie czy dodano kategorię
    if(!isset($_SESSION['catadd']['name'])) {
        header("Location:index.php?page=admin");
    }

    //dodanie kategorii
    $newcat_sql="INSERT INTO category (name) VALUES ('".mysqli_real_escape_string($dbconnect,$_SESSION['catadd']['name'])."')";
    $newcat_querry=mysqli_query($dbconnect, $newcat_sql);
    unset($_SESSION['catadd']['name']);
                                                                        
?>

<p>Dodano nową kategorię dla klubów</p>
