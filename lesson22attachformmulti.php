<?php

if(isset($_POST["upload"])){

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $file = $_FILES["attach"];

    $filetempname=$file["tmp_name"];
    $filename=$file["name"];
    $filetype=$file["type"];
    $filesize=$file["size"];

    var_dump($file);

    echo "<br/>";

    // echo $file["tmp_name"][0];


    foreach($filetempname as $key=>$value ){
        // move_uploaded_file($filetempname[$key],"fileserver/.$filename[$key]");
        // echo "Successful Uploaded";



        echo $filesize[$key] . "<br/>";

    }



}
}










echo "<hr/>";
?>


<!DOCTYPE html>
<html>
<head>
<title>Attach Form Multi</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<label for="attach">Files</lable> <br/> <br/>
<input type="file" name="attach[]" id="attach" class="" multiple><br/><br/>
<button type="submit" name="upload" id="upload" class="">Upload</button> 
</form>
</body>
</html>