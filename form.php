<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "form"; 


$conn = mysqli_connect($servername, $username, $password,$database);


if (!$conn){
    die("Sorry we failed to connect:<br> ". mysqli_connect_error());
}


if(isset($_POST['name'])){
    if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['subject'])&&!empty($_POST['message'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        
        $sql = "INSERT INTO `form` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
        
        $result = mysqli_query($conn , $sql);
        if ($result){
               echo '<script> alert("You message submitted successfully") </script>';
            }
            else{
                echo '<script> alert("You message is not submitted successfully") </script>';
            }
    }
}



?>