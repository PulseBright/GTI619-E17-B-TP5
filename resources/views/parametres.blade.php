 <!DOCTYPE html>
<html>
<body>

<h1> Parametres users </h1>


<form>

Nombre de tentatives
d’authentification maximal : <br>

<input id="nbtentative" type="text">

<br>

Délais d’
attente
en
tre chaque tentative 
échouée : 
<br>

<input id="delaitentative" type="text">

<br>

blockage d'access suite a trop de tentatives echouees?
<br>

  <input type="radio" name="lockout" value="oui" checked> oui<br>
  <input type="radio" name="lockout" value="non"> non<br>
  
  
 <br>



<h2> Gestion mot de passe </h2>

<br>

changement de password apres lockout?
<br>
<input type="radio" name="passresetlockout" value="oui" checked> oui<br>
  <input type="radio" name="passresetlockout" value="non"> non<br>
  
  <br>
  
  changement de pass periodiquement?
  <br>
  
  <input type="radio" name="passresetperiod" value="oui" checked> oui<br>
  <input type="radio" name="passresetperiod" value="non"> non<br>
  
  <br>
  duree de vie des mots de passe
  <br>
  
  <input id="passduree" type="text">
  
  
  
  <h2> Complexite de password </h2>
  
  longeur minimum de password <br>
  <input id="passlongeur" type="text">
  
  <br>
   au moins 1 majuscule?
  <br>  
  <input type="radio" name="passmajuscule" value="oui" checked> oui<br>
  <input type="radio" name="passmajuscule" value="non"> non<br>
  
  <br>
  
    au moins 1 minuscule?
  <br>  
  <input type="radio" name="passminuscule" value="oui" checked> oui<br>
  <input type="radio" name="passminuscule" value="non"> non<br>
  
  <br>
  
    au moins 1 chiffre?
  <br>  
  <input type="radio" name="passchiffre" value="oui" checked> oui<br>
  <input type="radio" name="passchiffre" value="non"> non<br>
  
  <br>
  
    au moins 1 caractere special?
  <br>  
  <input type="radio" name="passcaracspecial" value="oui" checked> oui<br>
  <input type="radio" name="passcaracspecial" value="non"> non<br>
  
  <br>
  
  
  
  
  
  


<br>

 
  
  

<input id="accept" type="submit" value="accepter modifications">

<input id="cancel" type="submit" value="cancel">
  

</form>

<br>











</body>
</html> 