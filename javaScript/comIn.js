$(document).ready(function() {
    $("#OK").click(function(){
        var id=$("#comId").val();
        var name=$("#comName").val();
        var type=$("#comType").val();
        var price=$("#comPrice").val();
        var num=$("#comNum").val();
        var count=$("#comCount").val();
        var day=$("#comDay").val();

        xml=GetXmlHttpObject();
            
            if (xml==null)
            {
                alert ("Browser does not support HTTP Request");
                return;
            }
            
            xml.open("POST","../php/comIn_in.php",true);
            var data="id="+id+"&name="+name+"&type="+type+"&price="+price+"&num="+num+"&count="+count+"&day="+day;
            //alert(data);
            //定义传输的文件HTTP头信息 
            xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
            xml.send(data);
            
            xml.onreadystatechange=function(){
                if(xml.readyState==4&&xml.status==200){
                    //alert(xml.responseText);
                    var result=xml.responseText;
                    if(result=="error"){
                        alert("插入失败！");
                    }
                    if(result=="success"){
                        alert("插入成功！");
                    }
                }
            }
    });

    function GetXmlHttpObject()//xmlhttp不同浏览器兼容问题
    {
    var xmlHttp=null;
    try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
    catch (e)
    {
    // Internet Explorer
    try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    }
    return xmlHttp;
    }

});