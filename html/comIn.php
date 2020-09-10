<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统|商品入库</title>
    <link rel="stylesheet" type="text/css" href="../css/comIn.css"/>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comBox.css"/>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../javaScript/ul.js"></script>
    <script src="../javaScript/comIn.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="box">
        <div id="topName"><strong>商品入库</strong></div>
        <form>
        <div id="circleBox">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div id="operation"> 
            <div>
                <span>商品ID：</span><input type="text" name="comId" id="comId"/>(只能输入字母、数字和下划线)
            </div>
            <div>
                <span>商品名：</span><input type="text" name="comName" id="comName"/>
            </div>
            <div>
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
            <div>
                <span>商品价格：</span><input type="text" name="comPrice" id="comPrice"/>
            </div>
            <div>
                <span>商品数：</span><input type="text" name="comNum" id="comNum"/>
                <span>原库存：</span><input type="text" name="comHisNum" id="comHisNum" readonly/>
            </div>
            <div>
                <span>商品销售量：</span><input type="text" name="comCount" id="comCount"/>
            </div>
            <div>
                <span>商品保质期：</span><input type="text" name="comDay" id="comDay"/>(填入到期时间xxxx-xx-xx)
            </div>
        </div>
        <div id="btnBox">
            <input type="reset" id="reset" value="重置" />
            <input type="button" id="OK" value="入库"/>
        </div>
        </form>
    </div>
    
</body>
</html>