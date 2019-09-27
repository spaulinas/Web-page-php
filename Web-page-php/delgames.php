<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['gamesdel']['name'])) {
        $_SESSION['gamesdel']['name']="";
        $_SESSION['gamesdel']['gamesID']="";
    }

?>

<h2>Usuń grę z bazy:</h2>

<?php $delgames_sql="SELECT * FROM games ORDER BY name";
      $delgames_query=mysqli_query($dbconnect, $delgames_sql);
      $delgames=mysqli_fetch_assoc($delgames_query);
       

        do { ?>
<p id="games"><a href="index.php?page=delgamesconf&gamesID=<?php echo $delgames['gamesID']; ?>"><?php echo $delgames['name']; ?></a></p>


<?php
        } while($delgames=mysqli_fetch_assoc($delgames_query));

?>