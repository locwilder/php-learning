
<?php 
 

function validate($array){
	
	if(empty($array)){
		return;
		}echo"da ist was drin<br>";
		
	if(empty($array['name'])){
		echo " kein name<br>";
		return false;
		}echo " Name ist ".$array['name']."<br>";
		
	if(empty($array['email'])){
		echo " keine email<br>";
		return false;
		}echo " Email lautet: ".$array['email']."<br>";
	
	if(empty($array['comments'])){
		echo " keine kommentar<br>";
		return false;
		}echo " Kommentar lautet: ".$array['comments']."<br>";
		
	if(empty($array['gender'])){
		echo " kein Geschlecht angegeben<br>";
		return false;
		}echo " Geschlecht: ".$array['gender']."<br>";
	return true;
}

?>

