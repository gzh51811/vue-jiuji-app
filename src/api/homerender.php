<?php

include 'connect.php';
header("content-type:text/html;charset=utf-8");
header("Access-Control-Allow-Origin:*");
 $homelist=isset($_GET['id'])?$_GET['id']:'11111';


 //查询列表页数据库 
//执行sql语句,得到结果集
$homelist_sql = "SELECT * FROM v1 limit 0,20";//字符串
$homelist_res = $conn -> query($homelist_sql);//total
$homelist_row = $homelist_res -> fetch_all(MYSQLI_ASSOC);//对象
 // var_dump($homelist_row);
//列表页初始化 
$homedatalist = array(
'code' => 1,
'list' => $homelist_row
);
echo json_encode($homedatalist ,JSON_UNESCAPED_UNICODE);





// $homelist_row ->close();



?>