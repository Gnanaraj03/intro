<?php
$connect=mysqli_connect("localhost","root","","databasename"); //database connect with this page
$sql="select * from connect";      //which table and column what you need and you want to get it everything in this line;* is select all column 
$result=mysqli_query($connect,$sql); //link with DB and sql query(query means 3 line)
$rowbyrowcheck=mysqli_num_rows($result); //row by row check this $result value

if($rowbyrowcheck>0){      
    while($row=mysqli_fetch_assoc($result)){  //getting value type num or string its mention
        echo $row['name'];
        echo "<br>";
        echo $row['reg_no'];
        echo "<br>";
    }
}
?>