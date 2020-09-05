<?php
    require_once('webconn.php');//引用连接数据库文件
	mysqli_select_db($webconn,$database);
    
    $id=(int)$_POST['id'];
    $sale_num=(int)$_POST['sale_num'];

    $sql_select="SELECT * FROM shop 
    WHERE shopId='$id'";

    $result=mysqli_query($webconn,$sql_select);
    if($row=mysqli_fetch_array($result)){
        $num=$row['shopNum'];
        $count=$row['shopCount'];
        if($num<$sale_num){//出售数不能大于现有库存
            echo "data error";
        }else{
            $update_num=$num-$sale_num;
            $update_count=$count+$sale_num;
            //echo "--$update_num"."--$update_count";
            $sql_update="UPDATE shop SET shopNum='$update_num',shopCount='$update_count'
            WHERE shopId='$id'";
            
            if(mysqli_query($webconn,$sql_update)){
                echo "success";
            }else{
                echo "update error";
            }
        }
    }else{
        echo "select error";
    }
    

    mysqli_close($webconn);
?>