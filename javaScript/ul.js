function ulSelect(text,btn,ulid,svg){
    var title=document.getElementById(text);
    var ul=document.getElementById(ulid);
    var btn=document.getElementById(btn);
    var svg=document.getElementById(svg);
    var li=ul.children;
    var ulDis=ul.style.display;
    if(ulDis=="none"){
        ul.style.display='block';
        svg.style.transform='rotateY(180deg)';
        btn.onblur=function(){
            setTimeout(function(){
                ul.style.display='none';
                svg.style.transform='none';},200); 
        }
        for(var i=0;i<li.length;i++){
        li[i].onclick=function(){
            title.value=this.innerText;}
        }   
    }                 
    else{
        ul.style.display='none';
        svg.style.transform='none'
    } 
}

