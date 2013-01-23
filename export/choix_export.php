<form action="#" method="POST">
    <fieldset>
   <legend> Exportation </legend>
 
    
 <p>Voulez vous exporter par rapport à:</p>
<label>une matiere</label><input type="radio" name="choix"  onChange="export_module();"/>
<label>une promo</label><input type="radio" name="choix"   onChange="export_promo(0);"/>
<label>un(e) élève</label><input type="radio" name="choix" onChange="export_promo(1);"/>

<div id="choix_export"></div>
<div id="choix2_export"></div>
</fieldset>
</form>