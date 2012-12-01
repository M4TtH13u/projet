function admin(){
var change = document.getElementsByClassName('eleve');
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
}






function prof(){
    var prof2=document.getElementById("prof1");
    if (prof2.checked){
        document.getElementById("ajout_prof").style.display="block";
    }else{
        document.getElementById("ajout_prof").style.display="none";
    }   
    var promo2=document.getElementById("eleve1");
    if (promo2.checked){
        document.getElementById("ajout_promo").style.display="block";
    }else{
        document.getElementById("ajout_promo").style.display="none";
    }    
}





