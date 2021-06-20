var header = document.getElementById("header");
var mobileMenu = document.getElementById("mobile-menu");

mobileMenu.onclick = function(){
     var isClosed = header.clientHeight === 46;
     if(isClosed){
         header.style.height = "auto";
     }else{
         header.style.height = "46px";
     }
}