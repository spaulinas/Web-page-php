<?php
include("header.php");
?>

<p>
    <?php
        if(!isset($_GET['page'])) {
            include("home.php");
        } else {
            $page=$_GET['page'];
            include("$page.php");
        }
    ?>
</p>

<?php
include("footer.php")
?>

