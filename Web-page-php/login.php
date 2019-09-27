
	<h1><center> Panel administracyjny </center></h1>
	<form name="login" action="index.php?page=admin" method="POST">
	<center>Login: <input type="text" name="user" /></center><br />
	<center>Hasło: <input type="password" name="password" /></center><br />
    <?php 
      if(isset($_POST['login']) && !isset($_SESSION['admin'])) {
          ?> 
        <p>Zły login albo hasło</p>    
    <?php
      }
    ?>
        
        
	<center><input type="submit" name="login" value="ZALOGUJ" /></center>
	</form>
