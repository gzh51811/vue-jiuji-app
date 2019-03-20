<?php

include 'connect.php';
header("content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin:*");
 // $homelist=isset($_GET['id'])?$_GET['id']:'11111';



//执行sql语句,得到结果集
$cartlist_sql = "SELECT * FROM cartlist";//字符串
$cartlist_res = $conn -> query($cartlist_sql);//total
$cartlist_row = $cartlist_res -> fetch_all(MYSQLI_ASSOC);//对象
 // var_dump($homelist_row);
//购物车页初始化 
$cartdatalist = array(
'code' => 1,
'list' => $cartlist_row
);
echo json_encode($cartdatalist ,JSON_UNESCAPED_UNICODE);









?>