<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>超市信息管理系统|登录</title>
    <link rel="stylesheet" type="text/css" href="../css/currency.css"/>
    <link rel="stylesheet" type="text/css" href="../css/comBox.css"/>
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>
    <script src="../javaScript/login.js"></script>
</head>
<body>
    <div id="top">
        <a href="index.html"><strong>超市信息管理系统</strong></a>
    </div>
    <form>
        <div id="box">     
            <div id="topName"><strong>登录</strong></div>
            <div id="loginBox">
                <div id="IDTitle"><span>ID:</span></div>
                <div id="idBox">
                    <input type="text" id="id" value="" onclick="clean_span('idError')"/>
                    <span id="idError"></span>
                </div>
                <div id="pwTitle"><span>密码:</span></div>
                <div id="pwBox">
                    <input type="password" id="password" value="" onclick="clean_span('pwError')"/>
                    <span id="pwError"></span>
                </div>
                <div id="btnBox">
                    <input type="button" id="loginBtn" value="登录" onclick="login()"/>
                </div>
            </div>
        </div>
    </form>
</body>
</html>