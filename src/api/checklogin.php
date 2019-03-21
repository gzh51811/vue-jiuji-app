<?php
//查询数据库
include 'connect.php';
header("content-type:text/html;charset=utf-8");

header("Access-Control-Allow-Origin:*");
// header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE');
// header('Content-type : application/json');
// header("Access-Control-Allow-Headers:x-requested-with,content-type");
//接收前端传来的数据
    $token = isset($_POST['token']) ? $_POST['token'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    
    // $logintime=$conn->query("SELECT logintime FROM user where username = '$username'");
    $sql = "SELECT * FROM user where username = '$username' AND token = '$token'";	
    $res = $conn->query($sql);	
	// //获取结果集里面的内容部分
    $row = $res->fetch_all(MYSQLI_ASSOC);//对象格式  [{},{},{}]

    if($row){
        $code=1;
    }else {
        $code=0;
    }
    
        $good=array(
            "code"=>$code,
            "token"=>$token,
            "username"=>$username,
            // "logintime"=>$logintime
        );










        echo json_encode($good,JSON_UNESCAPED_UNICODE);
        
      
       
        $conn->close();








?>