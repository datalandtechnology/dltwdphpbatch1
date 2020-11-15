<?php
session_start();
//Check session for redirect to private
if(isset($_SESSION["username"])){
    header("Location:private.php");
}

require_once("menu.php");

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username == "admin" && $password == "demo"){
        //Passed Area
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        //Redirect
        header("Location:private.php");
    }else{
        echo "<div><h4 class='errormsg'>Username and password do not match</h4></div>:";
    }


}

?>


<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<style>
table{
    margin:50px auto;
    background-color:rgba(233,242,127,0.5);
    padding:20px;
    border-radius:50px 0px 50px 0px;
}
td{
    height:30px;
}
.material{
    border:none;
    border-bottom:1px solid gray;
}
.material:focus{
    outline:none;
}
.errormsg{
    text-align:right;
    background-color:red;
    color:white;
    padding:2px;
}

</style>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">

<table>
<thead>
<tr>
<th colspan="2">Login Form</th>
</tr>
</thead>
<tbody>
<tr>
    <td><label for="username">User Name</label></td>
    <td><input type="text" name="username" id="username" class="material" ></td>
</tr>
<tr>
    <td><label for="password">Password</label></td>
    <td><input type="password" name="password" id="password" class="material"></td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2" align="right">
    <input type="reset" name="reset" id="reset" class="" value="Reset">
    <input type="submit" name="login" id="login" class="" value="Login">
</td>
</tr>
</tfoot>
</table>

</form>
</body>
</html>

