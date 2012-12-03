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


function afficher_delete()
{
     var eleve=document.getElementById("eleve");
    if (eleve.checked){
        document.getElementById("eleve_delete").style.display="block";
    }else{
        document.getElementById("eleve_delete").style.display="none";
    }   
    var prof=document.getElementById("prof");
     if (prof.checked){
        document.getElementById("prof_delete").style.display="block";
    }else{
        document.getElementById("prof_delete").style.display="none";
    }   
}
function afficher_delete2()
{
     var cpi1=document.getElementById("CPI1");
    if (cpi1.checked){
        document.getElementById("eleve_CPI1").style.display="block";
    }else{
        document.getElementById("eleve_CPI1").style.display="none";
    }   
    var cpi2=document.getElementById("CPI2");
     if (cpi2.checked){
        document.getElementById("eleve_CPI2").style.display="block";
    }else{
        document.getElementById("eleve_CPI2").style.display="none";
    } 
}

function reinitialiser()
{
    if(document.getElementById("ajout_promo")!=null)
        {
         document.getElementById("ajout_promo").style.display="none";
         document.getElementById("ajout_prof").style.display="none";  
        }
   else
   {
   document.getElementById("eleve_CPI1").style.display="none";
   document.getElementById("eleve_CPI2").style.display="none";
   document.getElementById("prof_delete").style.display="none";
   document.getElementById("eleve_delete").style.display="none";
   }
   
}
