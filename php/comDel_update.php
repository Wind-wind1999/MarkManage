<?php
    $hostname="localhost";
	$database="markmana";
	$username="root";
	$password="111111";
    global $webconn;
    $webconn=mysqli_connect($hostname,$username,$password);
	if(!$webconn){
		die('Could not connect:'.mysqli_error());
	}
    mysqli_select_db($webconn,$database);

    global $s_id;
    $s_id=(int)$_POST['s_id'];
    $id=(int)$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=(float)$_POST['price'];
    $num=(int)$_POST['num'];
    $count=(int)$_POST['count'];
    $day=$_POST['day'];

    global $n;
    $n=0;//统计修改了多少条数据
   
    tb_update("shopName",$name);
    tb_update("shopType",$type);
    tb_update("shopPrice",$price);
    tb_update("shopNum",$num);
    tb_update("shopCount",$count);
    tb_update("shopDay",$day);
    tb_update("shopId",$id);

    function tb_update($tb_data,$data){
        $s_id=$GLOBALS['s_id'];
        $webconn=$GLOBALS['webconn'];
        if($data==""){//如果传入的数据为空，表示不用修改
        }else{
            $sql_update="UPDATE shop SET $tb_data='$data' WHERE shopId='$s_id'";
            mysqli_query($webconn,$sql_update);
            $GLOBALS['n']++;
        }       
    }

    echo $GLOBALS['n'];

    mysqli_close($webconn);


?>