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
                }
            },

            error:function(){//请求出错处理
                alert("error");
            }
        });
    });

    $("#idSearch").click(function(){
        $("#comSearch_tip").text("");
    });

    $("#sale").click(function(){
        var id=$("#id").text();
        var sale_num=$("#saleNum").val();
        //alert(id+sale_num);
        $.ajax({
            type:"POST",
            url:"../php/comSale_sale.php",
            data:{"id":id,"sale_num":sale_num},
            success:function(data){
                //alert(data);
                if(data=="data error"){
                    $("#sale_tip").text("库存不足，出售失败！");
                }
                else if(data=="success"){
                    $("#sale_tip").text("出售成功！");
                }
                else if(data=="update erro"){
                    $("#sale_tip").text("出售失败！");
                }
                else{
                    $("#sale_tip").text("商品选择失败！");
                }
            },
            error:function(){
                alert("error");
            }
        });
    });

    $("#saleNum").click(function(){
        $("#sale_tip").text("");
    });
});