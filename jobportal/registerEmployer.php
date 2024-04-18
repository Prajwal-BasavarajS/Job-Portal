<?php

include 'connect.php';


$name =$email= $password="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST["name"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$fileName= basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["logo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

     
    
    $sql = "INSERT INTO employer (name,email,password,logo)
VALUES ('$name', '$email', '$password','$fileName')";

if ($conn->query($sql) === TRUE) {
    
    
    ?>
<html>
    <head>
        <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background: url(img/bgbg.png);height: 100vh;">
        <div style="">
        
        </div>
        
        <!-- Trigger the modal with a button -->
<button id="modalBtn" type="button" style="display:none" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
      <h3 >Employer has been registered.. Login to continue using our services</h3>
     <br>
     <a href="index.php?msg=login">Login</a>
    </div>
    </div>
</div>
    
    <script>
     $('#modalBtn').trigger("click");
    </script>
    </body>
</html>

<?php
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//$conn->close();
}else{
    header("location : index.php");
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

