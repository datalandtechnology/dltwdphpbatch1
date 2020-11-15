<?php
session_start();
session_destroy();
header("Location:login.php");
?>



<!-- Session Destroy -->
<!-- single session destroy = unset($_SESSION["key"]);
all session destroy = session_destroy(); -->