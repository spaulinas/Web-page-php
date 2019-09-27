<?php
    session_start();
    //sprawdzenie czy admin jest zalogowany
    if(!isset($_SESSION['admin'])) {
        header("Loacation:index.php?page=admin");
    }

//

    if(!isset($_SESSION['catadd']['name'])) {
        $_SESSION['catadd']['name']="";
    }

?>

    <h2>Dodaj kategorię</h2>

    <form  method="post" action="index.php?page=catconf" >
        <p><input type="text" name="name" value="<?php echo $_SESSION['catadd']['name']; ?>" size="50" /></p>
        <p><input type="submit" name="submit" value="Dodaj" /> </p>

    </form>