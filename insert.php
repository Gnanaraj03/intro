<?php
$connect=mysqli_connect("localhost","root","","databasename"); //database connect with this page
$sql="insert into connect (name,reg_no) values('naresh','4567')";      //insert Query
$result=mysqli_query($connect,$sql); //link with DB and sql query(query means 3 line)

if($result){    
    echo "<h2>added succcessfully</h2>";  
}else{
    echo "<h2>not succcessfully</h2>";
}
?>