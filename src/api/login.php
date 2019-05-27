<?php
//查询数据库
include 'connect.php';
header("content-type:text/html;charset=utf-8");

header("Access-Control-Allow-Origin:*");
// header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE');
// header('Content-type : application/json');
// header("Access-Control-Allow-Headers:x-requested-with,content-type");
//接收前端传来的数据
$username = isset($_POST['username']) ? $_POST['username'] : '';
$psw = isset($_POST['psw']) ? $_POST['psw'] : '';
$threemonths = isset($_POST['threemonths']) ? $_POST['threemonths'] : '';
// $logintimme = isset($_POST['logintimme']) ? $_POST['logintimme'] : '';
    $res2 = $conn->query("SELECT * FROM user where username = '$username' AND password = '$psw'");
    $row2 = $res2->fetch_all(MYSQLI_ASSOC);
   
    $uid =$row2[0]["uid"];
    $secret="simida";
    $api_token = md5(date('y-m-d', time()).$uid.$secret);
    if($threemonths=="true"){
        $addtime=7776000;
    }else if($threemonths=="false"){
        $addtime=86400;
    }
    $logintime=time()+$addtime;

    $sql = "SELECT * FROM user where username = '$username' AND password = '$psw'";	
    
    $res3=$conn->query("UPDATE user SET token = '$api_token' , logintime ='$logintime' WHERE username ='$username'");
    // $res4=$conn->query("UPDATE user SET logintime ='$logintime' WHERE username ='$username'");
	// //执行语句:得到的返回值是一个结果集
	$res = $conn->query($sql);	
	// //获取结果集里面的内容部分
    $row = $res->fetch_all(MYSQLI_ASSOC);//对象格式  [{},{},{}]
    $nickname = $nickname;
        
        
        if($row){
            $res2 = $conn->query("UPDATE user SET nickname = '$nickname' WHERE username ='$username'");
            $good=array(
                'code'=>'1',
                // 'list'=>$row,
                // 'message'=>'登录成功',
                "username"=>$username,
                "uid"=>$row[0]["uid"],
                 "_token"=>$api_token,
                 "logintime"=>$logintime,
                 "threemonths"=>$threemonths
            );
        }else{
             $good=array(
                'code'=>'0',
                // 'message'=>'用户名或密码错误',
                "username"=>$username,
                "psw"=>$psw
            );                       
        }
    //     // var_dump ($good);
    // //     if(in_array($username,$goodslist)){
    // //         echo 'code=1';
    // //     }
    // //     //把对象转成字符串，echo给前端
        echo json_encode($good,JSON_UNESCAPED_UNICODE);
        
      
       
        $conn->close();








?>