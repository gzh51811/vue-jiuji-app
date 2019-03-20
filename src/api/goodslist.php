<?php
//查询数据库
include 'connect.php';
header("content-type:text/html;charset=utf-8");

header("Access-Control-Allow-Origin:*");
// header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE');
// header('Content-type : application/json');
// header("Access-Control-Allow-Headers:x-requested-with,content-type");
//接收前端传来的数据
$status = isset($_GET['status']) ? $_GET['status'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$type = '%iPhone%';
if($id=='2'){
    $type = '%华为%';
}
if($status=='initialize'){
        $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '$type'");
}else if($status=='jiagebig'){
    $res = $conn->query("SELECT * FROM v1  WHERE productName LIKE '$type' order by price DESC ");
}else if($status=='jiagesmall'){
    $res = $conn->query("SELECT * FROM v1  WHERE productName LIKE '$type' order by price  ");
}else if($status=='xuanzheiw'){
    $res = $conn->query("SELECT * FROM v1 WHERE (productName LIKE '%华为%' or productName LIKE '%iP%' ) order by price ");
}else if($status=='xuanzhei'){
    $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%ip%' order by price");
}else if($status=='xuanzhew'){
    $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%华为%' order by price");
}else if($status=='xuanzheiws'){
    $res = $conn->query("SELECT * FROM v1 WHERE (productName LIKE '%华为%' or productName LIKE '%iP%' ) order by price DESC");
}else if($status=='xuanzheis'){
    $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%ip%' order by price DESC");
}else if($status=='xuanzhews'){
    $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%华为%' order by price DESC");
}else if($status=='suanzhe'){
    $idx1 = isset($_GET['idx1']) ? $_GET['idx1'] : '';
    $idx2 = isset($_GET['idx2']) ? $_GET['idx2'] : '';
    if($idx1=='true'&&$idx2=='true'){
        $res = $conn->query("SELECT * FROM v1 WHERE (productName LIKE '%华为%' or productName LIKE '%iP%' ) order by cid ");
    }else if($idx1=='true'&&$idx2=='false'){
        $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%ip%' order by cid");
    }else if($idx1=='false'&&$idx2=='true'){
        $res = $conn->query("SELECT * FROM v1 WHERE productName LIKE '%华为%' order by cid");
    }    
}
$row = $res->fetch_all(MYSQLI_ASSOC); 
echo json_encode($row,JSON_UNESCAPED_UNICODE);

        $conn->close();
?>