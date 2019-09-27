<?php
    if(!isset($_GET['clubID'])) {
        header("Location: index.php");
    }

    $opis_sql="SELECT * FROM club WHERE clubID=".$_GET['clubID'];
    if($opis_query=mysqli_query($dbconnect, $opis_sql)) {
        $opis=mysqli_fetch_assoc($opis_query);
        ?> 

    <h3>Klub: <?php echo $opis['name']; ?></h3>
    <p><img src="images/<?php echo $opis['photo']; ?>" /></p>
    <p><?php echo $opis['city']; ?></p>
    <p>Miejsce: <b><?php echo $opis['address']; ?></b></p>
    <p>Dzień: <b><?php echo $opis['day']; ?></b></p>
<p><b>Opis klubu:</b> <?php echo $opis['description']; ?></p>
    <?php
    }


?>