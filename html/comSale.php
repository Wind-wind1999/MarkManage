<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统|商品出售</title>
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/comSale.css"/>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comBox.css"/>
    <script src="../javaScript/comSale.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.php"><strong>超市信息管理系统</strong></a>
    </div>
    <div id="box">
        <form>
        <div id="topName"><strong>商品出售</strong></div>
        <div id="operation">
            <div id="comIdSearch"><span>商品ID搜索：</span>
                <input type="text" id="idSearch" value=""/>
                <button type="button" id="idSbtn"><embed src="../img/comDel_search.svg"/></button>
                <span id="comSearch_tip"></span>
            </div>           
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
            <div >
                <strong>出售数量：</strong>
                <input type="text" id="saleNum"/>
                <span id="saleNumTip"></span>
            </div>
            <div id="saleBox">
                <input type="reset" value="重置" id="comSale_reset"/>
                <input type="button" value="确认出售" id="sale"/>
            </div>
            <div id="sale_tip">

            </div>
        </div>
        </form>
    </div>
</body>
</html>