$(document).ready(function(){

    $("#comSearch_search").click(function(){
        
        $.ajax({
            url:"../php/comSearch_all.php",
            datatype:"json",
            success:function(data){
                //alert(data);
                var id,name,type,price,num,count,day;
                var data=jQuery.parseJSON(data);
                //alert(data);
                for(var i in data){
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


            },
            error:function(){
                alert("error");
            }

        });
    });

    function 

    $("#comSearch_reset").click(function(){
        $("#comDes_table").show();
    });
});