$(document).ready(function(){

    $("#idSbtn").click(function(){
        var id=$("#idSearch").val();
        //alert(id);
        $.ajax({
            type:"POST",//提交方式           
            url:"../php/comSale_search.php",//需要提交到的地址
            data:{"id":id},//提交的数据
            datatype:"json",//返回的数据格式"xml", "html", "script", "json", "jsonp", "text"
            success:function(data){//成功执行功能，data为返回数据
                //alert(data);
                if(data=="error"){
                    $("#comSearch_tip").text("查询失败！");
                    $("#idDelbtn").hide();
                }else{
                    var data=jQuery.parseJSON(data);
                    $("#id").text(data.id);
                    $("#name").text(data.name);
                    $("#type").text(data.type);
                    $("#price").text(data.price);
                    $("#num").text(data.num);
                    $("#count").text(data.count);
                    $("#day").text(data.day);
                    $("#comSearch_tip").text("查询成功！");
                    $("#idDelbtn").css("display","flex");
                }
            },

            error:function(){//请求出错处理
                alert("error");
            }
        });
    });

    $("#idSearch").click(function(){
        $("#comSearch_tip").text("");
        $("#idDelbtn").hide();
    });

    $("#idDelbtn").click(function(){
        var id=$("#id").text();
        //alert(id);
        $.ajax({
            type:"POST",
            url:"../php/comDel_delete.php",
            data:{"id":id},
            success:function(data){
                //alert(data);
                if(data=="success"){
                    $("#comSearch_tip").text("删除成功！");
                    $("#id").text("");
                    $("#name").text("");
                    $("#type").text("");
                    $("#price").text("");
                    $("#num").text("");
                    $("#count").text("");
                    $("#day").text("");
                }
                else{
                    $("#comSearch_tip").text("删除失败");
                    $("#idDelbtn").hide();
                }
            },
            error:function(){
                alert("error");
            }
        });
    });

    $("#del_btn_box").click(function(){
        //$("#update_tip").text("修改成功");
        var s_id=$("#id").text();
        var id=$("#comId").val();
        var name=$("#comName").val();
        var type=$("#comType").val();
        var price=$("#comPrice").val();
        var num=$("#comNum").val();
        var count=$("#comCount").val();
        var day=$("#comDay").val();

        $.ajax({
            type:"POST",
            url:"../php/comDel_update.php",
            data:{"s_id":s_id,"id":id,"name":name,"type":type,"price":price,"num":num,"count":count,"day":day},
            success:function(data){
                //alert(data);
                $("#update_tip").text("共有"+data+"条数据修改成功！");
            },
            error:function(){
                alert("error");
            }
        });
    });

});