<?php
//查询数据库
include 'connect.php';
header("content-type:text/html;charset=utf-8");

header("Access-Control-Allow-Origin:*");
//接收前端传来的数据
$username = isset($_POST['username']) ? $_POST['username'] : '';
$psw = isset($_POST['psw']) ? $_POST['psw'] : '';
$what= isset($_POST['what']) ? $_POST['what'] : '';
// $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
// $psw =  '';
//写查询语句:按需查询数据，每一次只查询一页数据


	$sql = "SELECT * FROM user where username = '$username'";
	
	//执行语句:得到的返回值是一个结果集
	$res = $conn->query($sql);
	
	
	//获取结果集里面的内容部分
    $row = $res->fetch_all(MYSQLI_ASSOC);//对象格式  [{},{},{}]
    if($what==0){
        $good=array(
            'code'=>'0',
            'message'=>'用户名已注册'
        ); 
    }else if($what==1)  {
        if($row){
            $good=array(
                'code'=>'0',
                'message'=>'用户名已注册'
            ); 
        }else{
            $res2 = $conn->query("INSERT INTO user (username,password) VALUES('$username','$psw')");
            $good=array(
                'code'=>'1',
                'message'=>'注册成功'
            );
            
        }
    }  
    

    // var_dump($row);  
    
    
        
        
       
    //     //把对象转成字符串，echo给前端
        echo json_encode($good,JSON_UNESCAPED_UNICODE);
       
      
       
        $conn->close();








?>