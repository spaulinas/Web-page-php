<!DOCTYPE html>

<?php
    include("dbconnect.php")
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <title>Stowarzyszenie Kostka</title>
    <style type="text/css">
      body {
        font-size: 80%;
        font-family: "Courier New", Courier, monospace;
        letter-spacing: 0.15em;  
        background-color: #efefef;}
     #page {
        max-width: 1000px;
        min-width: 720px;
        margin: 10px auto 10px auto;
        padding: 20px;
        border: 4px double #000;
        background-color: #ffffff;}
     #main-logo {
        width:800px;
        text-align:center;
        }
     #down-logo{
            width: 80px;
        } 
     #photo{
            width: 230px;
        } 
     #logo {
        text-align: center;
        }
  
        .b {
            color: goldenrod;
        }
        #games {
            text-align: left;
            margin-left: 380px;
        }
        #input {
            text-align: left;
            margin-left: 330px;
        }
    
      ul {
        width: 700px;
        padding: 10px;
        margin: 0px auto 0px auto;
        border-top: 2px solid #000;
        border-bottom: 1px solid #000;
        text-align: center;}
      li {
        display: inline;
        margin: 0px 0px;}
      p {
        text-align: center;
        width: 600px; 
        margin: 10px auto 10px auto; 
        font-weight: normal;}
      a {
        color: #000000;
        text-transform: uppercase;
        text-decoration: none;
        padding: 6px 18px 5px 18px;}
      a:hover, a.on {
        color: #cc3333;
        background-color: #ffffff;}
      h2, h3{
             text-align: center;
        }
    </style>
  </head>
  
  <body>
  
    <div id="page">
      <div id="logo">
        <img id="main-logo" src="images/games_logo.jpg" alt="main_logo" />
      </div>
      <ul>
        <?php
            $category_sql="SELECT * FROM category";
            $category_query=mysqli_query($dbconnect, $category_sql);
            $category=mysqli_fetch_assoc($category_query);
        ?>
        <li>
            <a href="index.php">HOME</a>
            <?php
            do { ?>
            <a href="index.php?page=club&categoryID=<?php echo $category['categoryID']; ?>"><?php echo $category['name']; ?></a> 
               
            <?php
            } while ($category=mysqli_fetch_assoc($category_query))
            ?>
            <a href="index.php?page=games1">Asortyment</a>
        </li>
        
      </ul>