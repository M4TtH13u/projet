function admin(nb){
var change = document.getElementsByClassName('eleve');
var change2 = document.getElementsByClassName('prof');
var change3 = document.getElementsByClassName('admin');
var change4 = document.getElementById('prof2');
switch (nb) 
{ 
case 2: 
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
document.getElementById('menu').style.width="100%";
    document.getElementById('menu').style.right="0%";

break; 
case 3: 
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
for(var i=0;i<change2.length;i++){
    change2[i].style.display="inline-block";
    document.getElementById('menu').style.width="100%";
    document.getElementById('menu').style.right="0%";
}
change4.style.display="inline-block";

break; 
case 4: 
    for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
for(var i=0;i<change2.length;i++){
    change2[i].style.display="inline-block";
}
for(var i=0;i<change3.length;i++){
    change3[i].style.display="inline-block";
    document.getElementById('menu').style.width="100%";
    document.getElementById('menu').style.right="0%";
}

break; 
default: 
break; 


}



}

function getXhr(){
	var xhr = null;
	if (window.XMLHttpRequest) // Firefox et autres
      	     xhr = new XMLHttpRequest();
	else if(window.ActiveXObject){ // Internet Explorer< 7
      		try {
  			xhr = new ActiveXObject("Msxml2.XMLHTTP");
      		} catch (e) {
  			xhr = new ActiveXObject("Microsoft.XMLHTTP") ;
      		}
	}
	else{
	    alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
      	    xhr = false;
	}
	return xhr;
  }



function verif2()
{
     var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('res');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","fonctions/delete_eleve.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send(null);
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

function gestion(){
    var ajm=document.getElementById("ajm");
    if (ajm.checked){
        document.getElementById("ajout_m").style.display="block";
    }else{
        document.getElementById("ajout_m").style.display="none";
    }   
    var delm=document.getElementById("delm");
    if (delm.checked){
        document.getElementById("delete_m").style.display="block";
    }else{
        document.getElementById("delete_m").style.display="none";
    }    
}

function associer2(){
   var xhr;
    var pere;
    var reponse;
    
    var idMod = document.getElementById('associer_mod').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('afficher_mat');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","modifier/associer_afficher_matiere.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('idMod='+idMod);
}

function associer(){
    var asm=document.getElementById("asm");
    if (asm.checked){
        document.getElementById("assoc_mat").style.display="block";
    }else{
        document.getElementById("assoc_mat").style.display="none";
    }   
    var dsm=document.getElementById("dsm");
    if (dsm.checked){
        document.getElementById("dissocier_mat").style.display="block";
    }else{
        document.getElementById("dissocier_mat").style.display="none";
    }    
}
function gestion2(){
   var xhr;
    var pere;
    var reponse;
    var span2 = document.getElementById('delete_m2');
    span2.innerHTML = '';
    var idMod = document.getElementById('gestion_matiere').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('delete_m2');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","add_delete/gestion_matiere2.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('idMod='+idMod);
}
function dissocier()
{
    var dsm=document.getElementById("dsm");
    if (dsm.checked){
      var xhr;
    var pere;
    var reponse;
   var idProf = document.getElementById('prof_assoc').value;
   if (idProf!=null)
       {
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('dissocier_mat');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","modifier/dissocier_matiere_prof.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('idProf='+idProf);  
    }
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
function afficher_delete2(idPromo)
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('choixEleve');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","fonctions/delete_eleve.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('idPromo='+idPromo);
}

function ajout_DS()
{
     var cpi1=document.getElementById("CPI1");
    if (cpi1.checked){
        ajout_DS1(1);
    }   
    var cpi2=document.getElementById("CPI2");
     if (cpi2.checked){
        ajout_DS1(2);
    }
}

function ajout_DS1(nb)
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('matiere');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","fonctions/ajout_ds2.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+nb);
}

function Exam_eleve()
{
    var champs1 = document.getElementsByName('matiere');
    var champs2 = document.getElementsByName('libelle');
    var champs3 = document.getElementsByName('date');
    var champs4 = document.getElementsByName('type');
    if(((champs1[0].value)!="") && ((champs2[0].value)!="") && ((champs3[0].value)!="") && ((champs4[0].value)!="")){
        var xhr;
        var pere;
        var reponse;
        var bouton = document.getElementById('button');
        bouton.innerHTML= '<input type="submit" value="Envoyer">';
        document.getElementById("matiere").style.display="none";
        document.getElementById("promo").style.display="none";
        xhr = getXhr();
        xhr.onreadystatechange = function(){
          if(xhr.readyState == 4){
                reponse = xhr.responseText;
                pere = document.getElementById('choixeleve');
                pere.innerHTML = reponse;
          }
        }
        xhr.open("POST","add_delete/ajout_DS_eleve.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
        var cpi1=document.getElementById("CPI1");
        if (document.getElementById("CPI1").checked){
            xhr.send('nb='+1);
        }
        else{
            xhr.send('nb='+2);
        }
    }
    else{
    alert('tous les champs doivent être remplis');
    }
}

function reinitialiser()
{
   var span=document.getElementsByTagName("span");
   for (var i=0; i<span.length; i++){
       span[i].style.display='none';
   }
   var div=document.getElementsByTagName("div");
   for (var i=1; i<div.length; i++){
       div[i].style.display='none';
   }
}

function effacer()
{
    
   document.getElementById("promo").style.display="block";
   var span=document.getElementsByTagName("span");
   span[0].innerHTML='<input type="button" value="Envoyer" Onclick="Exam_eleve();"/>';
   var div=document.getElementsByTagName("div");
   for (var i=2; i<div.length; i++){
       div[i].innerHTML='';
   }
}

function afficher_note()
{
    var xhr;
    var pere;
    var reponse;
    var div2 = document.getElementById('affnote');
    div2.innerHTML = '';
    var matiere;
    matiere= document.getElementById('matiere').value;
    if (matiere!=''){
        xhr = getXhr();
        xhr.onreadystatechange = function(){
          if(xhr.readyState == 4 && xhr.status == 200){
                reponse = xhr.responseText;
                pere = document.getElementById('affnote');
                pere.innerHTML = reponse;
          }
        }
        xhr.open("POST","fonctions/moyenne.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
        xhr.send('nb='+matiere);
    }   
}


function afficher_matiere()
{
    var xhr;
    var pere;
    var reponse;
    var module;
    module= document.getElementById('module').value;
    var div = document.getElementById('affmat');
    div.innerHTML = '';
    var div2 = document.getElementById('affnote');
    div2.innerHTML = '';
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('affmat');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","fonctions/afficherMatiere.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('module='+module);
}

function afficher_matiere2()
{
    var xhr;
    var pere;
    var reponse;
    var module;
    var pere2 = document.getElementById('affds');
    pere2.innerHTML = '';
    var pere3 = document.getElementById('affnote');
    pere3.innerHTML = ''; 
    var pere4 = document.getElementById('choixeleve');
    pere4.innerHTML = '';
    module= document.getElementById('module').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('affmat');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","modifier/modifier_note_matiere.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('module='+module);
}

function modifier_note()
{
    var xhr;
    var pere;
    var reponse;
    var matiere;
    var pere2 = document.getElementById('affds');
    pere2.innerHTML = ''; 
    var pere3 = document.getElementById('affnote');
    pere3.innerHTML = ''; 
    var pere4 = document.getElementById('choixeleve');
    pere4.innerHTML = '';
    matiere= document.getElementById('matiere').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('affds');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","modifier/modifier_note_DS.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+matiere);
}

function modifier_note2()
{
    var xhr;
    var pere;
    var reponse;
    var ds;
    ds= document.getElementById('DS').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('affnote');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","modifier/modifier_note.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+ds);
}

function eleve_note(promo){
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
            reponse = xhr.responseText;
            pere = document.getElementById('choixeleve');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","add_delete/ajout_DS_eleve.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+promo);
}

function cocher(){
    var box=document.getElementsByTagName('input');
    var i;
    var len=box.length;
    for (i=0; i<len; i++){
         if (box[i].type=='checkbox' )
            {
                box[i].checked = true;
            }
    }
}

function decocher(){
    var box=document.getElementsByTagName('input');
    var i;
    var len=box.length;
    for (i=0; i<len; i++){
         if (box[i].type=='checkbox' )
            {
                box[i].checked = false;
            }
    }
}

function export_eleve()
{
    var xhr;
    var pere;
    var reponse;
    var promo;
    
           
    promo= document.getElementById('export_promo').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('choix2_export');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","export/eleve_export.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+promo);
}
function export_promo0()
{
    var xhr;
    var pere;
    var reponse;
    var divchoix2 = document.getElementById('choix2_export');
    divchoix2.innerHTML = "";
    pere = document.getElementById('choix_export');
            
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
                        pere.innerHTML = reponse;

      }
    }
    xhr.open("POST","export/promo_export.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+"0");
}
function export_promo1()
{
    var xhr;
    var pere;
    var reponse;
    var divchoix2 = document.getElementById('choix2_export');
    divchoix2.innerHTML = "";
    pere = document.getElementById('choix_export');
            
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
                        pere.innerHTML = reponse;

      }
    }
    xhr.open("POST","export/promo_export.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('nb='+"1");
}
function export_matiere()
{
    var xhr;
    var pere;
    var reponse;
    var module;
    module= document.getElementById('export_module').value;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('choix2_export');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","export/matiere_export.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send('module='+module);
   
}
function export_module()
{
    var xhr;
    var pere;
    var reponse;
    
    pere = document.getElementById('choix_export');
            pere.innerHTML = "";
    var divchoix2 = document.getElementById('choix2_export');
    divchoix2.innerHTML = "";
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('choix_export');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","export/module_export.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send(null);
   
}

