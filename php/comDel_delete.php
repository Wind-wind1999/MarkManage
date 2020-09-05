<?php
    require_once('webconn.php');//引用连接数据库文件
    mysqli_select_db($webconn,$database);

    $id=(int)$_POST['id'];

    $sql="DELETE FROM shop
    WHERE shopId='$id'";

    if(mysqli_query($webconn,$sql)){
        echo "success";
    }else{
        echo "delete error";
    }

    mysqli_close($webconn);
?>