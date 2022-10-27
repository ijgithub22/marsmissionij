<?php
    require_once("pdo.php");
    session_start();
    require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        require_once("nav.php");
    ?>
    <?php
         require_once("dashboard.php")
    ?>
    <?php
        require_once("footer.php");
    ?>
</body>
</html>