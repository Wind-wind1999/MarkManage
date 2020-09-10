<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统|精细搜索</title>
    <link rel="stylesheet" type="text/css" href="../css/comSearch.css"/>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comBox.css"/>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../javaScript/ul.js"></script>  
    <script src="../javaScript/comSearch.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="box">
        <div id="topName"><strong>精细搜索</strong></div>
        <form>
        <div id="operation">
            <div id="condition">
                <div id="nameSearchBox">
                    <span>商品名：</span>
                    <input type="text" id="idSearch"/>
                    <span>(可直接点击搜索查看所有商品)</span>
                </div>
                <div id="comTypeBox">
                    <span>商品类型：</span><input type="text" id="comType"/>
                        <button type="button" id="comTypeBtn" onclick="ulSelect('comType','comTypeBtn','ulType','comEmbed')">
                            <embed type="image/svg+xml" id="comEmbed" src="../img/right hand.svg" style="transform: none;"/>
                        </button>
                        <ul id="ulType" style="display: none;">
                            <li>食品类</li>
                            <li>清洁类</li>
                            <li>床上用品</li>
                            <li>护肤类</li>
                            <li>电器类</li>
                            <li>容器类</li>
                            <li>刀具类</li>
                        </ul>
                </div>
                <div id="sectionBox">
                    <div id="sectionLeft">
                        <div>
                            <span>商品数区间：</span>
                            <input type="text" id="comLowNum"/>最小数
                            <strong>——</strong> 
                            <input type="text" id="comHighNum"/>最大数
                        </div>
                        <div>
                            <span>商品价格区间：</span>
                            <input type="text" id="comLowPrice"/>最低价
                            <strong>——</strong> 
                            <input type="text" id="comHighPrice"/>最高价
                        </div>     
                    </div>
                    <div id="sectionRight">
                        <div>
                            <span>商品销量区间：</span>
                            <input type="text" id="comLowCount"/>最低
                            <strong>——</strong>
                            <input type="text" id="comHighCount"/>最高
                        </div>
                        <div>
                            <span>商品保质期区间：</span>
                            <input type="text" id="comLowDay"/>最短
                            <strong>——</strong> 
                            <input type="text" id="comHighDay"/>最长
                        </div>
                    </div>
                </div>
            </div>
            <div id="comDescrip">
                <table id="comDes_table">
                    
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
            <div id="btn_Box">
                <input type="reset" value="重置" id="comSearch_reset"/>
                <span id="comSearch_tip"></span>
                <input type="button" value="搜索" id="comSearch_search"/>
            </div>
        </div>
        </form>
    </div>
</body>
</html>