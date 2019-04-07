window.onload = function(event) {
    if(this.innerWidth <= "768" && this.innerWidth > "480"){
        var butonSayi =this.document.getElementsByClassName('uzakButon'); 
        for(i=0;i<=butonSayi.length;i++){
        butonSayi[i].innerHTML="";
        }
    }
    if(this.innerWidth <= "480"){
       this.document.getElementById("yonlendirBas").setAttribute("style","display:none;");
       this.document.getElementById("gizliMobil").setAttribute("style","display:block;");
    }
};