function admin(nb){
var change = document.getElementsByClassName('eleve');
var change2 = document.getElementsByClassName('prof');
var change3 = document.getElementsByClassName('admin');
switch (nb) 
{ 
case 2: 
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
break; 
case 3: 
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
for(var i=0;i<change2.length;i++){
    change2[i].style.display="inline-block";
}
break; 
case 4: 
    for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
for(var i=0;i<change2.length;i++){
    change2[i].style.display="inline-block";
}
for(var i=0;i<change3.length;i++){
    change3[i].style.display="inline-block";
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

function verif()
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
        document.getElementById("matiere1").style.display="block";
    }else{
        document.getElementById("matiere1").style.display="none";
    }   
    var cpi2=document.getElementById("CPI2");
     if (cpi2.checked){
        document.getElementById("matiere2").style.display="block";
    }else{
        document.getElementById("matiere2").style.display="none";
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
        document.getElementById("eleve_delete").style.display="none";
        document.getElementById("prof_delete").style.display="none";
    }
   
}

function afficher_matiere()
{
    var xhr;
    var pere;
    var reponse;
    var module;
    module= document.getElementById('module').value;
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

function afficher_note()
{
    var xhr;
    var pere;
    var reponse;
    var matiere;
    matiere= document.getElementById('matiere').value;
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
function afficher_matiere2()
{
    var xhr;
    var pere;
    var reponse;
    var module;
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

function modifier_note()
{
    var xhr;
    var pere;
    var reponse;
    var matiere;
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