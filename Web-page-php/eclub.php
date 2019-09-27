<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }
	if(isset($_GET['clubID'])) {
	$_SESSION['editclub']['clubID']=$_GET['clubID'];
	}
//
	if(!isset ($_SESSION['editclub']['name'])) {
	$editclub_sql="SELECT * FROM club WHERE clubID=".$_GET['clubID'];
	$editclub_query=mysqli_query($dbconnect, $editclub_sql);
	$editclub=mysqli_fetch_assoc($editclub_query);
	
    $_SESSION['editclub']['name']=$editclub['name'];
    $_SESSION['editclub']['categoryID']=$editclub['categoryID'];
    $_SESSION['editclub']['city']=$editclub['city'];
    $_SESSION['editclub']['address']=$editclub['address'];
   
    $_SESSION['editclub']['day']=$editclub['day'];
    $_SESSION['editclub']['description']=$editclub['description'];
      
  }

?>

<h2>Edytuj Klub:</h2>
<form action="index.php?page=eclubconf" method="POST">
    <p id="input"><b class="b">Nazwa Klubu:</b><input type="text" name="name" value="<?php echo $_SESSION['editclub']['name']; ?>" /> <p>
    <p id="input"><b class="b">Kategoria:</b>
            
            <select name="categoryID">
            <?php $list_sql="SELECT * FROM category";
                $list_query=mysqli_query($dbconnect, $list_sql);
                $list=mysqli_fetch_assoc($list_query);
                
                do { ?>
                  <option value="<?php echo $list['categoryID']; ?>"
                          
                    <?php
                      if($list['categoryID']==$_SESSION['editclub']['categoryID']) {
                          echo "selected=selected";
                      }  
                    ?>    
           ><?php echo $list['name']; ?></option>  
            <?php    
                }while($list=mysqli_fetch_assoc($list_query));
            ?>
            </select>
            
        </p>
    <p id="input"><b class="b">Miasto:</b> <input type="text" name="city" value="<?php echo $_SESSION['editclub']['city']; ?>" /></p>
    <p id="input"><b class="b">Miejsce spotkań:</b> <input type="text" name="address" value="<?php echo $_SESSION['editclub']['address']; ?>" /></p>
    
    <p id="input"><b class="b">Dzień:</b> <input type="text" name="day" value="<?php echo $_SESSION['editclub']['day']; ?>" /></p>
    <p id="input"><b class="b">Opis klubu:</b></p> 
    <p id="input"><textarea name="description" cols=50 rows=4 value="<?php echo $_SESSION['editclub']['description']; ?>" ></textarea></p>
    
    
    
    <p><input type="submit" name="submit" value="Wprowadź zmiany"></p>

</form>