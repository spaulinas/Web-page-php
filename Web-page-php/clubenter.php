<?php
  session_start();
  if(!isset($_SESSION['admin'])) {
      header("Loacation:index.php?page=admin");
  }
    //dodanie do bazy
    $enterclub_sql="INSERT INTO club (name, categoryID, city, address, photo, day, description) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['name'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['categoryID'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['city'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['address'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['photo'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['day'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['clubadd']['description'])."')";
   
    
    $enterclub_query=mysqli_query($dbconnect, $enterclub_sql);

    unset($_SESSION['clubadd']);

?>

<p>Dodano nowy klub do bazy!</p>