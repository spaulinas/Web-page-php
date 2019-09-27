<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['catadd']['name'])) {
        $_SESSION['catadd']['name']="";
    }

?>

<h2>Potwierdź usunięcie</h2>

<?php $delcat_sql="SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
      $delcat_query=mysqli_query($dbconnect, $delcat_sql);
      $delcat=mysqli_fetch_assoc($delcat_query); 

    //sprawdzenie ilości klubów
    $club_sql="SELECT * FROM club WHERE categoryID=".$_GET['categoryID'];
    $club_query=mysqli_query($dbconnect, $club_sql);
    $ile=mysqli_num_rows($club_query);
    ?>

        <p><?php if($ile>0) {
            echo "Planujesz usunąć ".$ile." klubów znajdujących się w kategorii";
        } ?></p>

        <p><?php echo "Czy na pewno chcesz usunąć kategorię klubu: ".$delcat['name']."?"; ?></p>
        <p><a href="index.php?page=delcatyes&categoryID=<?php echo $_GET['categoryID']; ?>">Tak</a> ||<a href="index.php?page=delcat"> Nie</a></p>

