<?php
    require_once('webconn.php');//引用连接数据库文件
    mysqli_select_db($webconn,$database);

    $name=$_POST['name'];
    $type=$_POST['type'];

    $l_num=$_POST['l_num'];
    $h_num=$_POST['h_num'];

    $l_price=$_POST['l_price'];
    $h_price=$_POST['h_price'];

    $l_count=$_POST['l_count'];
    $h_count=$_POST['h_count'];

    $l_day=$_POST['l_day'];
    $h_day=$_POST['h_day'];

    if($l_num==""){$l_num=0;}
    if($h_num==""){$h_num=9999;}
    
    
    if($l_price==""){$l_price=0;}
    if($h_price==""){$h_price=9999;}

    if($l_count==""){$l_count=0;}
    if($h_count==""){$h_count=9999;}

    if($l_day==""){$l_day=0;}
    if($h_day==""){$h_day=9999;}
    

    $sql="SELECT * FROM shop WHERE 
     shopName like '%$name%'
     AND shopType like '%$type%'
     AND (shopPrice BETWEEN '$l_price' AND '$h_price')
     AND (shopNum BETWEEN '$l_num' AND '$h_num') 
     AND (shopCount BETWEEN '$l_count' AND '$h_count')
     AND (shopDay BETWEEN '$l_day' AND '$h_day')";
    //echo($sql);
    $result=mysqli_query($webconn,$sql);

    $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
    $data=json_encode($data,JSON_UNESCAPED_UNICODE);
    echo $data;

?>