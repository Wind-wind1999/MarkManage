<?php
    require_once('webconn.php');//引用连接数据库文件
	mysqli_select_db($webconn,$database);
	$query_rsdb="SELECT * FROM shop";
	$rsdb=mysqli_query($webconn,$query_rsdb)or die(mysqli_error($webconn));//查询表成功失败
	
	$totalRows_rsdb=mysqli_num_rows($rsdb);//查询结果条数
	$num=7;//每页显示数据量
    $amount=ceil($totalRows_rsdb/$num);//总页数
	if(isset($_GET['page'])){//获取链接上的page数
		$page=intval($_GET['page']);//返回整数
	}
	else{
		$page=1;
	}
	$first_line=($page-1)*$num;
	
	
	$query_limit_rsdb="SELECT * FROM shop LIMIT $first_line,$num";
	$limit_rsdb=mysqli_query($webconn,$query_limit_rsdb)or die(mysqli_error($webconn));
	$row_rsdb=mysqli_fetch_assoc($limit_rsdb);
	//mysqli_free_result($rsdb);
    ?>
