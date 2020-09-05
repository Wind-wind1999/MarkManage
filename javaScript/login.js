function login(){  
    var id=document.getElementById("id").value;
    var password=document.getElementById("password").value;
    //alert(id.length);
    if(id.length==0){//如果id和密码为空，做出相关提示
        document.getElementById("idError").innerHTML="ID不能为空！";
    }
    if(password.length==0){
        document.getElementById("pwError").innerHTML="密码不能为空！";
    }
    if(id.length>0&&password.length>0){
        xml=GetXmlHttpObject();
        
        if (xml==null)
        {
            alert ("Browser does not support HTTP Request");
            return;
        }
        
        xml.open("POST","../php/login_in.php",true);
        var data="id="+id+"&pw="+password;
        //alert(data);
        //定义传输的文件HTTP头信息 
        xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
        xml.send(data);
        
        xml.onreadystatechange=function(){
            if(xml.readyState==4&&xml.status==200){
                var result=xml.responseText;
                if(result=="error"){
                    alert("ID或密码错误，请重新输入！");
                }
                if(result=="succesful"){
                    window.location.href="index.php";
                }
                //alert(xml.responseText);
            }
        }
    }
}

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

function clean_span(code){
    //alert('hi');
    var data=document.getElementById(code).innerHTML;
    if(data.length>1){
        document.getElementById(code).innerHTML="";
    }
}