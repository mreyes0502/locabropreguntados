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

<div align="center" vertical-align="center">
<br><br><br>
<a href="ruedaruleta.php"><img  src="ruleta.png"></a>

</div>

</body>
</html>