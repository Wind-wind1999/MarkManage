$(document).ready(function(){
    $("#pageBox").hide();

    //获取翻页按钮的id
    var table="#descrip";
    var pageBox="#pageBox";
    var first="#firstPage";
    var previous="#previousPage";
    var now="#pageNow";
    var amount="#amount";
    var next="#nextPage";
    var last="#lastPage";
    var jump_text="#pageJump";
    var jump="#jump";

    $.ajax({
        url:"../php/search_all.php",
        datatype:"json",
        success:function(data){
            //alert(data);        
            var data=jQuery.parseJSON(data);
            //alert(data);
            print_table(data,table);
            cup_page(table,pageBox,first,previous,now,amount,next,last,jump_text,jump);
            print_tip(table);
        },
        error:function(){
            alert("error");
        }

    });

    $("#index_search_btn").click(function(){
        $("#descrip").text("");//点击搜索前清空表格数据
        //alert("hi");
        var text=$("#search").val();

        $.ajax({

            type:"POST",
            url:"../php/index_search.php",
            data:{"text":text},
            datatype:"json",
            success:function(data){
                //alert(data);        
                var data=jQuery.parseJSON(data);
                //alert(data);
                print_table(data,table);
                cup_page(table,pageBox,first,previous,now,amount,next,last,jump_text,jump);
                print_tip(table);
            },
            error:function(){
                alert("error");
            }
            

        });
    });

    function print_tip(table){
        var tb_row=$(table).find("tr").length;//获取表格行数
        $("#get_page_tip").text("共搜索出 "+(tb_row-1)+" 条数据");
    }

    function print_table(data,table){
        $(table).append("<tr><th>ID</th><th>商品名</th><th>商品类型</th><th>价格(元)</th><th>库存</th><th>销量</th><th>保质期(天)</th></tr>");
        for(var i in data){
            var id,name,type,price,num,count,day;
            id=data[i].shopId;
            name=data[i].shopName;
            type=data[i].shopType;
            price=data[i].shopPrice;
            num=data[i].shopNum;
            count=data[i].shopCount;
            day=data[i].shopDay;

            $(table).append("<tr><td>"+id
            +"</td><td>"+name
            +"</td><td>"+type
            +"</td><td>"+price
            +"</td><td>"+num
            +"</td><td>"+count
            +"</td><td>"+day
            +"</td></tr>");
        }
    }

    function cup_page(table,pageBox,first,previous,now,amount,next,last,jump_text,jump){

        $(pageBox).show();
        var tb_row=$(table).find("tr").length;//获取表格行数

        var show_page_num=7;//每页显示的行数
        var page=Math.ceil((tb_row-1)/show_page_num);//共有多少页
        $(amount).text(page);//总页数填入页面

        function show_page(now_page){//没有表头的表
            $(table+" tr").hide();//隐藏表格所有行
            $(now).text(now_page);  //当前页数插入到页面上         
            var i=show_page_num*(now_page-1);//第一行的行数下标
            while(i<(now_page*show_page_num)){
                $(table+" tr:eq("+i+")").show();
                i++;
            }
        }

        function show_hpage(now_page){//有表头的表，表头一直有显示
            $(table+" tr").hide();//隐藏表格所有行
            $(table+" tr:eq(0)").show();//显示表格第一行
            $(now).text(now_page);  //当前页数插入到页面上         
            var i=show_page_num*(now_page-1)+1;//第一行的行数下标(不包括作为第一行的表头，所以加1)
            while(i<(now_page*show_page_num+1)){
                $(table+" tr:eq("+i+")").show();
                i++;
            }
        }

        var now_page=1;//默认显示第一页
        show_hpage(now_page);
        
        $(next).click(function(){//点击下一页按钮
            if(now_page<page){
                now_page+=1;
                show_hpage(now_page);
            }       
        });

        $(previous).click(function(){//点击上一页按钮
            if(now_page>1){
                now_page-=1;
                show_hpage(now_page);
            }       
        });

        $(first).click(function(){//点击首页按钮
            now_page=1;
            show_hpage(now_page);     
        });

        $(last).click(function(){//点击尾页按钮
            now_page=page;
            show_hpage(now_page);     
        });

        $(jump).click(function(){//跳转按钮
            now_page=$(jump_text).val();
            if(now_page>=1&&now_page<=page){
                show_hpage(now_page);
            }     
        });
    }

    /*function cut_page(){
        $("#pageBox").show();
        var tb_row=$("#comDes_table").find("tr").length;//获取表格行数
        //alert(tb_row);

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

    }*/
    

});