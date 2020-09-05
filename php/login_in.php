<?php
    session_start();
    require_once('webconn.php');//引用连接数据库文件
    mysqli_select_db($webconn,$database);
    $query_rsdb="SELECT * FROM manager";
    $rsdb=mysqli_query($webconn,$query_rsdb)or die(mysqli_error($webconn));//查询表成功失败
    $rsdb_num=mysqli_num_rows($rsdb);//数据量
    //$rsdb_s=mysqli_fetch_assoc($rsdb);//获取第一行数据返回数组
    //echo($rsdb_num);
    $id=$_POST['id'];
    $pw=$_POST['pw'];  
    for($i=1;$i<$rsdb_num+1;$i++){
        $rsdb_s=mysqli_fetch_assoc($rsdb);
        //echo($rsdb_s['id']);
        if($id==$rsdb_s['id']&&$pw==$rsdb_s['password']){
            echo("succesful"); 
            $_SESSION['id']=$id;   
            break;  
        }
        if($i==$rsdb_num){
            echo("error");
        }
    }
?>