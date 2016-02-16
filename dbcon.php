<?php


$msqli = mysqli_connect('127.0.0.1', 'root', 'usbw', 'main');
if(mysqli_connect_errno($msqli)){
    echo 'failed to connect to MSQL: '.mysqli_connect_error();
}


$sql = "SELECT * FROM products";
$res = mysqli_query($msqli,$sql);
//var_dump($res);
$row = mysqli_fetch_all($res);
$cols = mysqli_query($msqli, "DESC products");
//var_dump($row);
$msqli -> close();

while($result = mysqli_fetch_array($cols) ){
    echo $result['Field']."  ";
}
echo "<br>";
foreach($row as $value){
    foreach($value as $element){
        echo $element." ";
    }
    echo "<br>";
}

    echo '<br>';
