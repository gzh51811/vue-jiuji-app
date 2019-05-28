<?php

include 'connect.php';
header("content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin:*");
 // $homelist=isset($_GET['id'])?$_GET['id']:'11111';

 $tel = isset($_GET['tel']) ?  $_GET['tel'] : '';
 $id = isset($_GET['id']) ?  $_GET['id'] : '';
// echo $tel,$id;
//删除
$cartlist_sql = "DELETE FROM cartlist WHERE cid='$id' and tel='$tel'";//字符串
$cartlist_res = $conn -> query($cartlist_sql);//total

//查询
$sql2="SELECT * FROM cartlist WHERE tel='$tel'";
$res2=$conn->query($sql2);
$row2=$res2->fetch_all(MYSQLI_ASSOC);//对象

if($cartlist_res){
    echo json_encode($row2,JSON_UNESCAPED_UNICODE);
 }else{
     echo 'no';
 }








?>