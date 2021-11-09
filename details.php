<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vote.css">

    <title>Details.php</title>
</head>
<body>
    
</body>
</html>

<?php
include 'connection.php';
$detail=mysqli_query($con,"SELECT * FROM pokhara");
while($row=mysqli_fetch_array($detail))
{
    $store1=$row['Jason'];
    $store2=$row['Bidhya'];
    $store3=$row['Pushpa'];
    $store4=$row['Girija'];

    // $result=$store1+$store2+$store3+$store4;
    // $per_Jason=round($store1*100/$result).'%';
    // $per_Bidhya=round($store2*100/$result).'%';
    // $per_Pushpa=round($store3*100/$result).'%';
    // $per_Girija=round($store4*100/$result).'%';

    echo"<div class='records'>
    <img src='img/1.png'>&nbsp;&nbsp;&nbsp;<br>
    <img src='img/2.png'>&nbsp;&nbsp;&nbsp;<br>
    <img src='img/1.png'>&nbsp;&nbsp;&nbsp;<br>
    <img src='img/1.png'>&nbsp;&nbsp;&nbsp;<br>

    </div>";

}
?>