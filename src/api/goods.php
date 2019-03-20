<?php
    header("content-type:text/html;charset=utf-8;");
    header("access-control-allow-origin: *");
    include 'connect.php'; 

    //接收数据
    $cid = isset($_GET['cid']) ?  $_GET['cid'] : '';
    $m = isset($_GET['m']) ?  $_GET['m'] : '';
    $g_name = isset($_GET['g_name']) ?  $_GET['g_name'] : '';
    $qty = isset($_GET['qty']) ?  $_GET['qty'] : '';
    $g_color = isset($_GET['g_color']) ?  $_GET['g_color'] : '';
    $g_size = isset($_GET['g_size']) ?  $_GET['g_size'] : '';
    $g_imgurl = isset($_GET['g_imgurl']) ?  $_GET['g_imgurl'] : '';
    $g_price = isset($_GET['g_price']) ?  $_GET['g_price'] : '';


   
   //查询列表页数据库  
    //执行sql语句,得到结果集
    $goods_sql = "SELECT * FROM v1 WHERE cid='$cid'";//字符串
    $goods_res = $conn -> query($goods_sql);//total
    $goods_row = $goods_res -> fetch_all(MYSQLI_ASSOC);//对象
   
   //列表页初始化  
   if($m == 'init'){
        $goods_datalist = array(
            'code' => 200,
            'msg' => '发送成功',
            'list' => $goods_row
        );
        echo json_encode($goods_datalist,JSON_UNESCAPED_UNICODE);
   }

   //加入购物车
   if($m == 'addCar'){
      $insertCar_sql = "INSERT INTO cartlist(name,color,size,price,qty,imgurl) VALUES('$g_name','$g_color','$g_size','$g_price','$qty','$g_imgurl')";
      $insertCar_res = $conn -> query($insertCar_sql);//total
        $data = array(
            'code' => 200,
            'msg' => '添加成功',
        );
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
   } 
    

 