<?php
    require_once('webconn.php');//引用连接数据库文件
	mysqli_select_db($webconn,$database);
    
    $id=(int)$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=(float)$_POST['price'];
    $num=(int)$_POST['num'];
    $count=(int)$_POST['count'];
    $day=$_POST['day'];

    //echo $id.",".$name.",".$type.",".$price.",".$num.",".$count.",".$day;
    $sql="INSERT INTO shop (shopId,shopName,shopType,shopPrice,shopNum,shopCount,shopDay)
    VALUES ('$id','$name','$type','$price','$num','$count','$day')";

    //$sql="INSERT INTO shop (shopId,shopName,shopType,shopPrice,shopNum,shopCount,shopDay)
    //VALUES ('202009001','黑底红衬塑料碗','容器类','12','15','1','365*4')";
    if ($webconn->query($sql) === TRUE) {
    echo "success";
    } else {
        //echo mysqli_error();
        echo "error";
    }

    $webconn->close();
?>