<?php
    $dbconnect = mysqli_connect("localhost", "root", "", "kostka");
    
 
    if(mysqli_connect_errno()) {
        echo "Błąd połączenia z bazą:".mysqli_connect_error();
        exit();
        
    }
?>