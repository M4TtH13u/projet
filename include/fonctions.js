function admin(){
var change = document.getElementsByClassName('eleve');
var change2 = document.getElementsByClassName('prof');
for (var i=0;i<change.length;i++){
change[i].style.display="inline-block";}
for(var i=0;i<change2.length;i++){
    change2[i].style.display="inline-block";
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


function promo(num_promo){
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            
            pere = document.getElementById('center');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","include/promo.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send("nb="+num_promo);
  }
function matiere(num_mat)
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            
            pere = document.getElementById('center');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","include/matiere.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send("nb="+num_mat);
}
function faccueil()
{
    document.getElementById('center').innerHTML="<img src='image/accueil.jpg'/>";
}
function professeur()
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            
            pere = document.getElementById('center');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","include/prof.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send(null);
}
function ajoutProfEleve()
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('center');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","ajout_prof_eleve.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send(null);
}

function deleteProfEleve()
{
    var xhr;
    var pere;
    var reponse;
    xhr = getXhr();
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
            reponse = xhr.responseText;
            pere = document.getElementById('center');
            pere.innerHTML = reponse;
      }
    }
    xhr.open("POST","delete_prof_eleve.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=utf-8');
    xhr.send(null);
}

function verif()
{
    alert('à faire');
    //a faire
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
