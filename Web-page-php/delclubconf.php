<?php
    session_start();
   
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['clubadd']['name'])) {
        $_SESSION['clubadd']['name']="";
    }

?>

<h2>Potwierdź usunięcie</h2>

<?php $delcat_sql="SELECT * FROM club WHERE clubID=".$_GET['clubID'];
      $delcat_query=mysqli_query($dbconnect, $delcat_sql);
      $delcat=mysqli_fetch_assoc($delcat_query); 

//sprawdzenie ilości gier należących do klubu
$game_sql="SELECT * FROM games WHERE clubID=".$_GET['clubID'];
$game_query=mysqli_query($dbconnect, $game_sql);
$ile=mysqli_num_rows($game_query);
?>
<p><?php if($ile>0) {
    echo "Planujesz usunąć dodatkowo ".$ile." gier przynależących do klubu";
} ?> </p>

  
<p>   
<?php echo "Czy na pewno chcesz usunąć klub: ".$delcat['name']."?";
?>
</p>
<p><a href="index.php?page=delclubyes&clubID=<?php echo $_GET['clubID']; ?>">Tak</a> ||<a href="index.php?page=delclub"> Nie</a></p>

