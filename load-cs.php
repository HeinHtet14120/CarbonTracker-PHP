<?php

$conn = mysqli_connect("localhost", "root","","crp") or die ("COnnection Failed");

if ($_POST['type'] == ""){

    $sql = "SELECT * FROM carbrand";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['id']}'>{$row['cname']}</option>";
    }
}else if($_POST['type'] == 'typeData'){

    $sql = "SELECT * FROM cartype WHERE cid = {$_POST['id']}";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['id']}'>{$row['carname']}</option>";
    }
}


echo $str;