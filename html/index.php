<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="styleSheet" type="text/css" href="../css/index.css"/>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../javaScript/index.js"></script>
    <script src="../javaScript/index_pageJump.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="outlandP">
        <div id="outland"><a href="./index_unland.php">退出登录</a></div>
        <div id="person"><a href="person.php">人员管理</a></div>
    </div>
    <div id="box">
        <div id="boxTop">
            <div id="broadcast">
                <div id="broIcon">
                    <embed src="../img/broadcast.svg" type="image/svg+xml">
                </div>
                <div id="broBox">
                    <div id="broMessage">如果有相关通知，将会在此处显示。点击可查看通知详情</div>
                </div>
            </div>
            <div id="searchBox">
                <input type="text" name="" id="search"/>
                <a id="index_search_btn"><embed src="../img/search.svg" type="image/svg+xml"></a>
            </div>
        </div>
        <div id="function">
            <div id="funBox">
                <a id="comIn" href="./comIn.php" target="_blank"><embed src="../img/comIn.svg" type="image/svg+xml">
                    <span>商品入库</span></a>
                <a id="comDel" href="./comDel.php" target="_blank"><embed src="../img/delete.svg" type="image/svg+xml">
                    <span>商品修改</span></a>
                <a id="comSale" href="./comSale.php" target="_blank"><embed src="../img/sale.svg" type="image/svg+xml"> 
                    <span>商品出售</span></a>
                <a id="comSearch" href="./comSearch.php" target="_blank"><embed src="../img/comSearch.svg" type="image/svg+xml">
                    <span>精细搜索</span></a>
            </div>
            <div id="shadow"></div>
            <div id="get_page_tip"></div>
            <div id="comDescrip">
                <strong>商品详单</strong>
                <table id="descrip">                   
                </table>
            </div>
            <div id="pageBox">
                <a id="firstPage">首页</a>
                <a id="previousPage">
                    <embed src="../img/right hand.svg"/>
                </a>
                <b id="pageNow"></b>
                <b>/</b>
                <b id="amount"></b>
                <a id="nextPage">
                    <embed src="../img/right hand.svg"/>
                </a>
                <a id="lastPage">末页</a>
                <input type="text" id="pageJump"/>页
                <a id="jump">跳转</a>              
            </div>
        </div>
    </div>
    <div id="message">
        <?php require_once("../php/index_person.php");?>
        <div id="message_picture">
            <embed src="../img/head_picture.svg"/>
        </div>
        <div id="message_id">
            <?php echo($_SESSION['id']);?>
        </div>
    </div>
    <div id="copyright">
        版权归属@
    </div>
</body>
</html>