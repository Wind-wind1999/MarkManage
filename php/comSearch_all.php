<?php
    require_once('webconn.php');//引用连接数据库文件
    mysqli_select_db($webconn,$database);

    $sql="SELECT * FROM shop";

    $result=mysqli_query($webconn,$sql);
  
    $data=mysqli_fetch_all($result,MYSQLI_ASSOC);
    $data=json_encode($data,JSON_UNESCAPED_UNICODE);
    echo "$data";

    mysqli_close($webconn);

?>