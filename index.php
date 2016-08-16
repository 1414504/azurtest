<html>
<body>
<a href = "?cat=windows">windows</a>
<a href = "?cat=ios">ios</a>
<a href = "?cat=android">android</a>

<?php

if(isset($_GET['cat'])){
    $var=$_GET['cat'];
    $con=new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b6a499dae60006", "aeeb879c", "db_shahidbaig");
    $sql="select * from bug where lower(bug_category)=lower('$var')";
    $result=$con->query($sql);
    $con->close();

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_array($result)) {
            echo $row ['bug_category'] . "<br>";
            echo $row ['bug_name'] . "<br>";
            echo $row ['bug_summary'] . "<br> <br> <br>";
        }
    }

}
?>