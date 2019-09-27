<?php 
    session_start();
    
    //sprawdzenie czy admin się wylogował
    if(isset($_GET['action'])) {
        if($_GET['action']=="logout") {
            unset($_SESSION['admin']);
        }
    }



    //sprawdzenie poprawność nazwy użytkownika i hasła
    if(isset($_POST['login'])) {
        $log_sql="SELECT * FROM admin WHERE adminname='".$_POST['user']."' AND password='".sha1($_POST['password'])."'";
        if($log_query=mysqli_query($dbconnect, $log_sql)) {
			$log_rs=mysqli_fetch_assoc($log_query);
			$_SESSION['admin']=$log_rs['adminname'];
        } 
          
    }



    if (isset($_SESSION['admin'])) {
        include ("admin_panel.php");     
    } else {
        include("login.php");
    }



?>