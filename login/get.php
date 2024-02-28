<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login with getmethod</title>
</head>
<body>
    <form action="get.php" method="GET">   
    <!-- <?php $_SERVER['PHP_SELF'];?> -->
        <label for="Username">UserName</label>
        <input type="text" name="username">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php
if(isset($_GET['login'])){
    $username=$_GET['username'];
    $password=$_GET['password'];
    
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
</body>
</html>