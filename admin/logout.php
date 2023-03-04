<?php
setcookie("Admin", $cookie_value, time() - (86400 * 30), "/");
header('location: index.php');
?>