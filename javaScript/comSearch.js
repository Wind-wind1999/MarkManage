$(document).ready(function(){
    $("#pageBox").hide();
    $("#comSearch_search").click(function(){
        $("#comDes_table").text("");//每次点击之前重置表格内容

        var name=$("#idSearch").val();//商品名搜索输入的数据
        var type=$("#comType").val();//类型数据

        //获取区间数据
        var low_num = $("#comLowNum").val();
        var high_num = $("#comHighNum").val();

        var low_price = $("#comLowPrice").val();
        var high_price = $("#comHighPrice").val();

        var low_count = $("#comLowCount").val();
        var high_count = $("#comHighCount").val();

        var low_day = $("#comLowDay").val();
        var high_day = $("#comHighDay").val();

        $.ajax({
            type:"POST",
            url:"../php/comSearch_search.php",
            data:{"name":name,"type":type,"l_num":low_num,"h_num":high_num,"l_price":low_price,"h_price":high_price,
                "l_count":low_count,"h_count":high_count,"l_day":low_day,"h_day":high_day},
            datatype:"json",
            success:function(data){
                //alert(data);        
                var data=jQuery.parseJSON(data);
                //alert(data);
                print_table(data);
                cut_page();

                var tb_row=$("#comDes_table").find("tr").length;//表格行数
                $("#comSearch_tip").text("共搜索出"+(tb_row-1)+"条数据");
            },
            error:function(){
                alert("error");
            }

        });
    });

    function print_table(data){
        $("#comDes_table").append("<tr><th>ID</th><th>商品名</th><th>商品类型</th><th>价格(元)</th><th>库存</th><th>销量</th><th>保质期(天)</th></tr>");
        for(var i in data){
            var id,name,type,price,num,count,day;
            id=data[i].shopId;
            name=data[i].shopName;
            type=data[i].shopType;
            price=data[i].shopPrice;
            num=data[i].shopNum;
            count=data[i].shopCount;
            day=data[i].shopDay;

            $("#comDes_table").append("<tr><td>"+id
            +"</td><td>"+name
            +"</td><td>"+type
            +"</td><td>"+price
            +"</td><td>"+num
            +"</td><td>"+count
            +"</td><td>"+day
            +"</td></tr>");
        }
    }

    function cut_page(){
        $("#pageBox").show();
        var tb_row=$("#comDes_table").find("tr").length;//获取表格行数
        //alert(tb_row);

        //for(var i=1;i<tb_row;i++){//事先移除表格所有行避免表格内容重复堆叠
       //     $("#comDes_table tr:eq("+i+")").remove();
      //  }

        var show_page_num=5;//每页显示的行数
        var page=Math.ceil((tb_row-1)/show_page_num);//共有多少页
        $("#amount").text(page);//总页数填入页面

        function show_page(now_page){//没有表头的表
            $("#comDes_table tr").hide();//隐藏表格所有行
            $("#pageNow").text(now_page);  //当前页数插入到页面上         
            var i=show_page_num*(now_page-1);//第一行的行数下标
            while(i<(now_page*show_page_num)){
                $("#comDes_table tr:eq("+i+")").show();
                i++;
            }
        }

        function show_hpage(now_page){//有表头的表，表头一直有显示
            $("#comDes_table tr").hide();//隐藏表格所有行
            $("#comDes_table tr:eq(0)").show();//显示表格第一行
            $("#pageNow").text(now_page);  //当前页数插入到页面上         
            var i=show_page_num*(now_page-1)+1;//第一行的行数下标(不包括作为第一行的表头，所以加1)
            while(i<(now_page*show_page_num+1)){
                $("#comDes_table tr:eq("+i+")").show();
                i++;
            }
        }

        var now_page=1;//默认显示第一页
        show_hpage(now_page);
        
        $("#nextPage").click(function(){//点击下一页按钮
            if(now_page<page){
                now_page+=1;
                show_hpage(now_page);
            }       
        });

        $("#previousPage").click(function(){//点击上一页按钮
            if(now_page>1){
                now_page-=1;
                show_hpage(now_page);
            }       
        });

        $("#firstPage").click(function(){//点击首页按钮
            now_page=1;
            show_hpage(now_page);     
        });

        $("#lastPage").click(function(){//点击尾页按钮
            now_page=page;
            show_hpage(now_page);     
        });

        $("#jump").click(function(){//跳转按钮
            now_page=$("#pageJump").val();
            if(now_page>=1&&now_page<=page){
                show_hpage(now_page);
            }     
        });

    }
    
});