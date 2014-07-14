<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>PHP TEST</title>

<script type="text/javascript">
function show(obj) {
no = obj.options[obj.selectedIndex].value;
count = obj.options.length;
for(i=1;i<count;i++)
document.getElementById('myDiv'+i).style.display = 'none';
if(no>0)
document.getElementById('myDiv'+no).style.display = 'block';
}
</script>

</head>

<body>

<h1> Willkommen, Bitten geben Sie ihre Daten ein</h1>
<?php
include 'validate.php';


if(isset($_POST['absenden']))
{	if(!validate($_POST)){
	echo " Formular nicht komplett ausgefüllt <br>";
	}echo "email sent<br>" ;
    $name = $_POST['name'];
    echo "User Has submitted the form and entered this name : <b> $name </b>";
    echo "<br>You can use the following form again to enter a new name.";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">

<table width="200" border="0">
  <tr>
    <td><span class="contact">Auswahl:</span></td>
    <td><span class="contact">
      <select name="auswahl" onChange="show(this)">     
      	<option value="0">Bitte wählen</option>
        <option value="1">Anfrage</option>
        <option value="2">Rücksendung</option>
      </select>
    </span></td>
  </tr>
  <tr id="myDiv1" style="display:none">
    <td><span class="contact"> Produktnr: </span></td>
    <td>
    <span class="contact"><input type="text" name="produktnr" width="100" /></span>
    </td>
  </tr>
  <tr id="myDiv2" style="display:none">
    <td><span class="contact"> Bestellnr: </span></td>
    <td>
    <span class="contact"><input type="text" name="bestellnr" width="100" /></span>
    </td>
  </tr>
  
  <tr>
    <td><span class="contact"> Name: </span></td>
    <td><span class="contact">
      <input type="text" name="name" width="100" />
    </span></td>
  </tr>
  <tr>
    <td><span class="contact"> E-mail: </span></td>
    <td><span class="contact">
      <input type="text" name="email" width="100" />
    </span></td>
  </tr>
  <tr>
    <td><span class="contact"> Kommentar: </span></td>
    <td><span class="contact">
      <textarea name="comments" rows="5" cols="40"></textarea>
    </span></td>
  </tr>
  <tr>
    <td><span class="contact"> Geschlecht: </span></td>
    <td><span class="contact">
      <input type="radio" name="gender" value="male" />
männlich
<input type="radio" name="gender" value="female" />
weiblich </span></td>
  </tr>
</table>

<p class="contact" >

  <input type="submit" name="absenden" >
</p>
</form>




</body>
</html>