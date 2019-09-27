<h2><b class="b">Klub</b> : nazwa gry </h2>


<?php
    
       $games_sql="SELECT games.clubID, games.name, club.name AS club_name FROM games JOIN club ON games.clubID=club.clubID ORDER BY club.name" ;
       
       if($games_query=mysqli_query($dbconnect, $games_sql)){
        $games=mysqli_fetch_assoc($games_query);
       }

            ?>
            <?php
            do { ?>
            <p id="games"><b class="b"><?php echo $games['club_name']; ?></b> :
            <?php echo $games['name']; ?><p>
               
            <?php
            } while ($games=mysqli_fetch_assoc($games_query))
            ?>
                
 
        