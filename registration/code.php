<?php

if(!isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $connect=mysqli_connect("localhost","root","","databasename"); //database connect with this page
    $sql="INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')"; 
    $result=mysqli_query($connect,$sql); //link with DB and sql query(query means 3 line)
    if($result){    
        echo "<h2>added succcessfully</h2>";  
    }else{
        echo "<h2>not succcessfully</h2>";
    }
}