<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="styleSheet" type="text/css" href="../css/index.css"/>
    <script src="../javaScript/index_pageJump.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="outlandP">
        <div id="outland"><a href="./index_unland.php">退出登录</a></div>
        <div id="person">人员管理</div>
    </div>
    <div id="box">
        <div id="boxTop">
            <div id="broadcast">
                <div id="broIcon">
                    <embed src="../img/broadcast.svg" type="image/svg+xml">
                </div>
                <input type="text" name="" id="broMessage" readonly value="公告"/>
            </div>
            <div id="searchBox">
                <input type="text" name="" id="search"/>
                <a><embed src="../img/search.svg" type="image/svg+xml"></a>
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
            <div id="comDescrip">
                <?php require_once("../php/getShop.php");?>
                <strong>商品详单</strong>
                <table id="descrip">
                    <tr>
                        <th>ID</th>
                        <th>商品名</th>
                        <th>商品类型</th>
                        <th>价格(元)</th>
                        <th>库存</th>
                        <th>销量</th>
                        <th>保质期(天)</th>
                    </tr>
                    <?php do{ ?>
                    <tr>
                        <td><?php echo($row_rsdb['shopId']); ?></td>
                        <td><?php echo($row_rsdb['shopName']); ?></td>
                        <td><?php echo($row_rsdb['shopType']); ?></td>
                        <td><?php echo($row_rsdb['shopPrice']); ?></td>
                        <td><?php echo($row_rsdb['shopNum']); ?></td>
                        <td><?php echo($row_rsdb['shopCount']); ?></td>
                        <td><?php echo($row_rsdb['shopDay']); ?></td>
                    </tr>
                    <?php }while($row_rsdb = mysqli_fetch_assoc($limit_rsdb));?>
                </table>
            </div>
            <div id="pageBox">
                <?php if($amount==1){?>
                <strong>1</strong>
                <?php }if($amount>1){?>
                <a id="firstPage" href="" onclick="firstPage()">首页</a>
                <a id="previousPage" href="" onclick="previousPage()">
                    <embed src="../img/right hand.svg"/>
                </a>
                <strong id="pagenow"><?php echo($page);?></strong>
                <strong>/</strong>
                <strong id="amount"><?php echo($amount);?></strong>
                <a id="nextPage" href="" onclick="nextPage()">
                    <embed src="../img/right hand.svg"/>
                </a>
                <a id="lastPage" href="" onclick="lastPage()">末页</a>
                <input type="text" id="pageJump"/>页
                <a id="jump" href="" onclick="pageJump()">跳转</a>
                <?php }?> 
                 
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