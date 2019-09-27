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

<h2>Usuń kategorię</h2>

<?php $delcat_sql="SELECT * FROM category";
      $delcat_query=mysqli_query($dbconnect, $delcat_sql);
      $delcat=mysqli_fetch_assoc($delcat_query);
       

        do { ?>
    <p><a href="index.php?page=catconfdel&categoryID=<?php echo $delcat['categoryID']; ?>"><?php echo $delcat['name']; ?></a></p>


<?php
        } while($delcat=mysqli_fetch_assoc($delcat_query));

?>