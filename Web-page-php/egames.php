<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }
    	if(isset($_GET['gamesID'])) {
	$_SESSION['editgames']['gamesID']=$_GET['gamesID'];
	}
//
	if(!isset ($_SESSION['editgames']['name'])) {
	$editgames_sql="SELECT * FROM games WHERE gamesID=".$_GET['gamesID'];
	$editgames_query=mysqli_query($dbconnect, $editgames_sql);
	$editgames=mysqli_fetch_assoc($editgames_query);
	
    $_SESSION['editgames']['name']=$editgames['name'];
    $_SESSION['editgames']['clubID']=$editgames['clubID'];
 
  }

?>

<h2>Edytuj pozycję:</h2>
<form action="index.php?page=egamesconf" method="POST">
    <p id="input"><b class="b">Nazwa gry:</b> <input type="text" name="name" value="<?php echo $_SESSION['editgames']['name']; ?>" /> <p>
    <p id="input"><b class="b">Klub</b>:
            
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
            
        </p>
    
    <p><input type="submit" name="submit" value="Wprowadź zmiany"></p>

</form>