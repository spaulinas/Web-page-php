<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//
if(isset($_POST['submit'])) {
	$_SESSION['editclub']['name']=$_POST['name'];
    $_SESSION['editclub']['categoryID']=$_POST['categoryID'];
    $_SESSION['editclub']['city']=$_POST['city'];
    $_SESSION['editclub']['address']=$_POST['address'];
    $_SESSION['editclub']['day']=$_POST['day'];
    $_SESSION['editclub']['description']=$_POST['description'];
	} else {
     header("Location:index.php");
    }

?>
  <div>
        <h2>Powtierdź wprowadzone dane</h2>
         <p>Nazwa klubu: <?php echo  $_SESSION['editclub']['name'] ?> </p>
         <p>Kategoria: 
                    <?php 
                    $category_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['editclub']['categoryID'];
                    $category_query=mysqli_query($dbconnect, $category_sql);
                    $category=mysqli_fetch_assoc($category_query);
                    echo $category['name'];
                    ?> 
         </p>
         <p>Miasto: <?php echo  $_SESSION['editclub']['city'] ?> </p>
        <p>Miejsce spotkań: <?php echo  $_SESSION['editclub']['address'] ?> </p>
         <p>Dzień: <?php echo  $_SESSION['editclub']['day'] ?> </p>
         <p>Opis klubu: <?php echo  $_SESSION['editclub']['description'] ?> </p>
        </div>    
    <?php 
    
?>

	
<p><a href="index.php?page=eclubup" >Potwierdź zmianę</a> | <a href="index.php?page=eclub" >Wróć z powrotem</a></p>