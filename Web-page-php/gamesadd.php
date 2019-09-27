<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['gamesadd']['name'])) {
       $_SESSION['gamesadd']['name']="";
        $_SESSION['gamesadd']['clubID']="1";
    }

?>

<h2>Dodaj gry do bazy:</h2>

<form  method="post" action="index.php?page=gamesconf" >
    <p id="input"><b class="b">Nazwa gry:</b> <input type="text" name="name" value="<?php echo $_SESSION['gamesadd']['name']; ?>" size="30" /></p>

    <p id="input"><b class="b">Wybierz klubu:</b>
            <select name="clubID">
            <?php $list_sql="SELECT * FROM club";
                $list_query=mysqli_query($dbconnect, $list_sql);
                $list=mysqli_fetch_assoc($list_query);
                
                do { ?>
                  <option value="<?php echo $list['clubID']; ?>"
                          
             <?php
             if($list['clubID']==$_SESSION['gamesadd']['clubID']) {
                          echo "selected=selected";
                      }  
                    ?>    
           ><?php echo $list['name']; ?></option>  
            <?php    
                }while($list=mysqli_fetch_assoc($list_query));
            ?>
            </select>  
    
    
    
    
    
<p><input type="submit" name="submit" value="Dodaj" /> </p>

</form>