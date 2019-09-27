<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['gamesdel'])) {
        $_SESSION['gamesdel']['name']="";
        $_SESSION['gamesdel']['gamesID']="";
    }

?>

<h2>Potwierdź usunięcie</h2>

<?php $delgames_sql="SELECT * FROM games WHERE gamesID=".$_GET['gamesID'];
      $delgames_query=mysqli_query($dbconnect, $delgames_sql);
      $delgames=mysqli_fetch_assoc($delgames_query); 

?> 

<p>   
<?php echo "Czy na pewno chcesz usunąć grę z bazy: ".$delgames['name']."?";
?>
</p>
<p><a href="index.php?page=delgamesyes&gamesID=<?php echo $_GET['gamesID']; ?>">Tak</a> ||<a href="index.php?page=delgames"> Nie</a></p>