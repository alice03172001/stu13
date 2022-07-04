<?php
// 新版mysqli連線程式(建立資料庫連接程式)

$host="localhost"; //連本機
$user="sales"; //帳號
$password="123456"; //密碼
$database="stu13"; //資料庫
$link=mysqli_connect($host,$user,$password,$database);
if($link<>false){
    mysqli_query($link,"SET CHARACTER SET UTF8");
}   //<>是不等於的意思，一定要設這個
?>