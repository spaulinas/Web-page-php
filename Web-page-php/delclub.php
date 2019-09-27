<?php
    session_start();
    
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }



    if(!isset($_SESSION['clubadd']['name'])) {
        $_SESSION['clubadd']['name']="";
    }

?>

<h2>Usuń kategorię</h2>

<?php $delclub_sql="SELECT * FROM club";
      $delclub_query=mysqli_query($dbconnect, $delclub_sql);
      $delclub=mysqli_fetch_assoc($delclub_query);
       

        do { ?>
    <p><a href="index.php?page=delclubconf&clubID=<?php echo $delclub['clubID']; ?>"><?php echo $delclub['name']; ?></a></p>


<?php
        } while($delclub=mysqli_fetch_assoc($delclub_query));

?>