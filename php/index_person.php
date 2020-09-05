<?php 
    if(!isset($_SESSION['id'])){//判断是否是有人登录的页面，否则跳至未登录页面
        echo("<script>window.location.href='../html/index_unland.php';</script>");
    }
    if($_SESSION['id']=='a'){
        echo("<script>document.getElementById('person').style.display='flex';</script>");
    }
?>