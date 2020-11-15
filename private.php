<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}

require_once("menu.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Public Page</title>

<style>
div{
    background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTMArkDtDBsV7chcoxZTsDBr9xUkWH4hd7wpg&usqp=CAU
);
    width:100%;
    height:500px;
    text-align:center;
}
</style>
</head>
<body>
<div>
<h3>This is private area</h3>
</div>
</body>
</html>
