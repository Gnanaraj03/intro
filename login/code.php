<?php
if(!isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $connect=mysqli_connect("localhost","root","","databasename"); //database connect with this page
    $sql="select * from login where username='$username' and password='$password'"; //check the DB value and input value
    $result=mysqli_query($connect,$sql); //link with DB and sql query(query means 3 line)
    $rowbyrowcheck=mysqli_num_rows($result); //row by row check this $result value

if($rowbyrowcheck>0){    
    echo "<h2>login succcessfully</h2>";  
}else{
    echo "<h2>invalid User</h2>";
}}
?>