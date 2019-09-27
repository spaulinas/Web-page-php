<?php
    if(!isset($_GET['categoryID'])){
        header("Location:index.php");
    } 

    $club_sql="SELECT club.clubID, club.name, club.city, club.address, club.photo, club.day, category.name AS category_name FROM club JOIN category ON club.categoryID=category.categoryID WHERE club.categoryID=".$_GET['categoryID'];
    
    if($club_query=mysqli_query($dbconnect, $club_sql)) {
        $club=mysqli_fetch_assoc($club_query);
    }

    if(mysqli_num_rows($club_query)==0) {
        echo "Brak klubów w podanej kategorii.";
    } else {
        ?>
        <h2><?php echo $club['category_name']; ?></h2>
        <?php do{
            ?> 
        <div>
        <a href="index.php?page=opis&clubID=<?php echo $club['clubID']; ?>">
        <p><img id="photo" src="images/<?php echo $club['photo']; ?>"></p>
            <p>Klub: <b class="b"><?php echo $club['name']; ?> </b></p>
            <p><?php echo $club['city']; ?> </p></a>
        </div>
            
    <?php
        } while($club=mysqli_fetch_assoc($club_query));
        
        ?>
        <?php
    }
        ?> 