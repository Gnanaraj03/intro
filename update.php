<?php
$connect=mysqli_connect("localhost","root","","databasename"); //database connect with this page
$sql="update connect set name='jayaram',reg_no='12345' where id='5' ";      //update Query
$result=mysqli_query($connect,$sql); //link with DB and sql query(query means 3 line)

if($result){    
    echo "<h2>update succcessfully</h2>";  
}else{
    echo "<h2>not update</h2>";
}
?>