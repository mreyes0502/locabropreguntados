<html>
<body bgcolor="#434752">

<div align= "center">
<img src="header.png">
<br>

<?php
session_start();
echo "<font size='6' face='Impact' color='#ffffff'> Puntaje: </font> <font size='6' face='Impact' color='#1fbba6'> ".$_SESSION['puntaje']." </font>" ;

?>
</div>

<div align="center" vertical-align="center" >
<br><br><br>
<img src="corona.gif">

</div>
<?php
header('refresh:5; url=corona.php');  
?>
</body>
</html>