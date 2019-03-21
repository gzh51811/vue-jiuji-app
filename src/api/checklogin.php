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

    
        $good=array(
            "code"=>1,
            "token"=>$token,
            "username"=>$username,
            // "logintime"=>$logintime
        );










        echo json_encode($good,JSON_UNESCAPED_UNICODE);
        
      
       
        $conn->close();








?>