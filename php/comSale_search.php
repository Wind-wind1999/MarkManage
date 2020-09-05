<?php
    require_once('webconn.php');//引用连接数据库文件
    mysqli_select_db($webconn,$database);
    
    $id=(int)$_POST['id'];

    $sql="SELECT * FROM shop 
    WHERE shopId='$id'";

    $result=mysqli_query($webconn,$sql);
  
    if($row=mysqli_fetch_array($result)){ 
        $data=array();     
        $data['id']=$row['shopId'];
        $data['name']=$row['shopName'];
        $data['type']=$row['shopType'];
        $data['price']=$row['shopPrice'];
        $data['num']=$row['shopNum'];
        $data['count']=$row['shopCount'];
        $data['day']=$row['shopDay'];
        $data=json_encode($data);
        echo "$data";
    }else{
        echo "error";
    }
    
    mysqli_close($webconn);
?>