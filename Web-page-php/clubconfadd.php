
<?php
    session_start();

    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

    
    if(isset($_POST['submit2'])) {
      $_SESSION['clubadd']['name']=$_POST['name'];
      $_SESSION['clubadd']['categoryID']=$_POST['categoryID'];
      $_SESSION['clubadd']['city']=$_POST['city'];
      $_SESSION['clubadd']['address']=$_POST['address'];
      $_SESSION['clubadd']['day']=$_POST['day'];
      $_SESSION['clubadd']['description']=$_POST['description'];
    } else {
        header("Location:index.php");
    }

    //z w3chool załączanie plików
    if($_FILES['fileToUpload']['name']!="") {
        $_SESSION['clubadd']['photo']=$_FILES['fileToUpload']['name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
   
    if (file_exists($target_file)) {
        echo "Plik już istnieje.";
        $uploadOk = 0;
    }
   
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Plik jest za duży.";
        $uploadOk = 0;
    }
   
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Tylko pliku w formacie JPG, JPEG, PNG i GIF są dozwolone.";
        $uploadOk = 0;
    }
 
    if ($uploadOk == 0) {
        echo "Twój plik nie mógł zostać załączony.";
   
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
           ?>
        <div>
                
                <h2>Potwierdź wprowadzone dane</h2>
                <p>Nazwa klubu: <?php echo  $_SESSION['clubadd']['name'] ?> </p>
                <p>Zdjęcie klubu: <img src="images/<?php echo  $_SESSION['clubadd']['photo'] ?>" /> </p>
                <p>Kategoria: 
                    <?php 
                    $category_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['clubadd']['categoryID'];
                    $category_query=mysqli_query($dbconnect, $category_sql);
                    $category=mysqli_fetch_assoc($category_query);
                    echo $category['name'];
                    
                    ?> 
                
                </p>
            
            
                <p>Miasto: <?php echo  $_SESSION['clubadd']['city'] ?> </p>
                <p>Miejsce spotkań: <?php echo  $_SESSION['clubadd']['address'] ?> </p>
                <p>Dzień: <?php echo  $_SESSION['clubadd']['day'] ?> </p>
                <p>Opis klubu: <?php echo  $_SESSION['clubadd']['description'] ?> </p>
        </div>    
        <?php
        } else {
            echo "Pojawił się błąd w trakcie załączania pliku.";
        }
    }

    } else {
        $_SESSION['clubadd']['photo']="brak.jpg";
        ?>
        <div>
                <h2>Powtierdź wprowadzone dane</h2>
                <p>Nazwa klubu: <?php echo  $_SESSION['clubadd']['name'] ?> </p>
                <p>Zdjęcie klubu: <img src="images/<?php echo  $_SESSION['clubadd']['photo'] ?>" /> </p>
                <p>Kategoria: 
                    <?php 
                    $category_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['clubadd']['categoryID'];
                    $category_query=mysqli_query($dbconnect, $category_sql);
                    $category=mysqli_fetch_assoc($category_query);
                    echo $category['name'];
                    
                    ?> 
                
                </p>
            
            
                <p>Miasto: <?php echo  $_SESSION['clubadd']['city'] ?> </p>
                <p>Miejsce spotkań: <?php echo  $_SESSION['clubadd']['address'] ?> </p>
                <p>Dzień: <?php echo  $_SESSION['clubadd']['day'] ?> </p>
                <p>Opis klubu: <?php echo  $_SESSION['clubadd']['description'] ?> </p>
        </div>    
    <?php 
}
?>

<p><a href="index.php?page=clubadd">Powrót</a> - <a href="index.php?page=clubenter">Potwierdź</a></p>