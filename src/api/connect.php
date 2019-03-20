<?php
    $db_servername = 'localhost';
    $db_uname = 'root';
    $db_pwd = '';
    $db_name = 'llcc';

    $conn = new mysqli($db_servername,$db_uname,$db_pwd,$db_name);

    if($conn->connect_error){
        die('连接失败：'.$conn->connect_error);
    }
    // else{
    //     echo '连接成功！';
    // }
