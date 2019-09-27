<?php
  session_start();
  if(!isset($_SESSION['admin'])) {
      header("Loacation:index.php?page=admin");
  }
    
  if(!isset($_SESSION['clubadd'])) {
      $_SESSION['clubadd']['name']="";
      $_SESSION['clubadd']['categoryID']="1";
      $_SESSION['clubadd']['city']="";
      $_SESSION['clubadd']['address']="";
      $_SESSION['clubadd']['day']="";
      $_SESSION['clubadd']['description']="";
      $_SESSION['clubadd']['photo']="brak.jpg";
      
  } else {
      if($_SESSION['clubadd']['photo']!="brak.jpg"){
          unlink("images/".$_SESSION['clubadd']['photo']);
      }
      
  }

    
    
?>

<div>
  
    <h2>Wprowadź dane:</h2>
    <form method="post" action="index.php?page=clubconfadd" enctype="multipart/form-data">
        <p id="input"><b class="b">Nazwa klubu: </b><input type="text" name="name" value="<?php echo $_SESSION['clubadd']['name']; ?>"></p>
        <p id="input"><b class="b">Zdjęcie klubu:</b> <input type="file" name="fileToUpload" id="fileToUpload"></p>
        <p id="input"><b class="b">Kategoria:</b>
            
            <select name="categoryID">
            <?php $list_sql="SELECT * FROM category";
                $list_query=mysqli_query($dbconnect, $list_sql);
                $list=mysqli_fetch_assoc($list_query);
                
                do { ?>
                  <option value="<?php echo $list['categoryID']; ?>"
                          
                    <?php
                      if($list['categoryID']==$_SESSION['clubadd']['categoryID']) {
                          echo "selected=selected";
                      }  
                    ?>    
           ><?php echo $list['name']; ?></option>  
            <?php    
                }while($list=mysqli_fetch_assoc($list_query));
            ?>
            </select>
            
        </p>
        <p id="input"><b class="b">Miasto:</b>  <input type="text" name="city" value="<?php echo $_SESSION['clubadd']['city']; ?>"></p>
        
        <p id="input"><b class="b">Miejsce spotkań:</b>  <input type="text" name="address" value="<?php echo $_SESSION['clubadd']['address']; ?>"></p>
        
        <p id="input"><b class="b">Dzień:</b> <input type="text" name="day" value="<?php echo $_SESSION['clubadd']['day']; ?>"></p>
        
        <p id="input"><b class="b">Opis klubu:</b></p> 
        <p id="input"><textarea name="description" cols=50 rows=4><?php echo $_SESSION['clubadd']['description']; ?></textarea></p>
        <p><input type="submit" name="submit2" value="ZATWIERDŹ"></p>
    </form>
  
</div>