<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统|商品修改</title>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comBox.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comDel.css"/>
    <script src="../javaScript/ul.js"></script>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../javaScript/comDel.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="box">
        <div id="topName"><strong>商品修改</strong></div>
        <div id="operation">
            <div id="comIdSearch"><span>商品ID搜索：</span>
                <input type="text" id="idSearch"/>
                <button type="button" id="idSbtn"><embed src="../img/comDel_search.svg"/></button>
                <button type="button" id="idDelbtn"><embed src="../img/comDel_delete.svg"/></button>
                <span id="comSearch_tip"></span>
            </div>
            <div>
                <div id="comDes">
                    <table id="comDes_table">
                        <tr>
                            <th>ID</th>
                            <th>商品名</th>
                            <th>商品类型</th>
                            <th>价格(元)</th>
                            <th>库存</th>
                            <th>销量</th>
                            <th>保质期(天)</th>
                        </tr>
                        <tr>
                            <td id="id"></td>
                            <td id="name"></td>
                            <td id="type"></td>
                            <td id="price"></td>
                            <td id="num"></td>
                            <td id="count"></td>
                            <td id="day"></td>
                        </tr>
                    </table>
                </div>
                <strong>商品修改</strong>
                <div id="comChange">
                    <div id="comChange_box">
                        <div>
                            <span>商品ID：</span><input type="text" name="comId" id="comId"/>
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
                        </div>
                        <div>
                            <span>商品销售量：</span><input type="text" name="comCount" id="comCount"/>
                        </div>
                        <div>
                            <span>商品保质期：</span><input type="text" name="comDay" id="comDay"/>
                            <span id="update_tip"></span>
                        </div>
                    </div>
                    <div id="del_btn_box">
                        <b>修<br>改</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>