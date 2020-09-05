    

function firstPage(){
    document.getElementById("firstPage").href="index.php?page=1";
}

function previousPage(){
    var pagenow=parseInt(document.getElementById("pagenow").innerHTML);
    if(pagenow>1){
        document.getElementById("previousPage").href="index.php?page="+(pagenow-1);
    }
    //alert(document.getElementById("previousPage").href);
}

function nextPage(){
    var pagenow=parseInt(document.getElementById("pagenow").innerHTML);
    var amount=document.getElementById("amount").innerHTML;
    if(pagenow<amount){
        document.getElementById("nextPage").href="index.php?page="+(pagenow+1);
    }
    //alert(document.getElementById("nextPage").href);
}

function lastPage(){
    var amount=document.getElementById("amount").innerHTML;
    document.getElementById("lastPage").href="index.php?page="+amount;
}

function pageJump(){
    var page=document.getElementById("pageJump").value;
    var amount=document.getElementById("amount").innerHTML;
    if(page>=amount){
        document.getElementById("jump").href="index.php?page="+amount;
    }
    if(page<=1){
        document.getElementById("jump").href="index.php?page=1";
    }
    if(page>1&&page<amount){
        document.getElementById("jump").href="index.php?page="+page;
    }
    //alert(document.getElementById("jump").href);
}