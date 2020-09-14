<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="styleSheet" type="text/css" href="../css/index.css" charset="UTF-8"/>
</head>
<body>
    <div id="top">
        <a href="index.html"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="outlandP">
        <div id="outland"><a href="./login.php">登录</a></div>
    </div>
    <div id="box">
        <div id="boxTop">
        <div id="broadcast">
                <div id="broIcon">
                    <embed src="../img/broadcast.svg" type="image/svg+xml">
                </div>
                <div id="broBox">
                    <div id="broMessage"></div>
                </div>
            </div>
            <div id="searchBox">
                <input type="text" name="" id="search"/>
                <a><embed src="../img/search.svg" type="image/svg+xml"></a>
            </div>
        </div>
        <div id="function">
            <div id="funBox">
                <a id="comIn" onclick="alert('请先登录');"><embed src="../img/comIn.svg" type="image/svg+xml">
                    <span>商品入库</span></a>
                <a id="comDel" onclick="alert('请先登录');"><embed src="../img/delete.svg" type="image/svg+xml">
                    <span>商品删除</span></a>
                <a id="comSale" onclick="alert('请先登录');"><embed src="../img/sale.svg" type="image/svg+xml"> 
                    <span>商品出售</span></a>
                <a id="comSearch" onclick="alert('请先登录');"><embed src="../img/comSearch.svg" type="image/svg+xml">
                    <span>精细搜索</span></a>
            </div>
            <div id="shadow"></div>
            <div id="comDescrip">
                <p>商品详单</p>
                <table id="descrip">
                    
                </table>
            </div>
        </div>
    </div>
    <div id="message">

    </div>
    <div id="copyright">
        版权归属@
    </div>
</body>
</html>