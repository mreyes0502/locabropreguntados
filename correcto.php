

<html>
<body bgcolor="#434752">
<basefont size="20" face="Impact">

<div align= "center">
<img src="header.png">
</div>

<div align="center" vertical-align="center">
<br><br>
<img src="bien.png">
<br><br>
<?php

	
session_start();
$v = $_SESSION['puntaje'];
$_SESSION['puntaje'] = $v + 1;

echo "<font face='Impact' size='20' color='#ffffff'> Lleva </font> <font face='Impact' size='20' color='#1fbba6'> ".$_SESSION['puntaje']." </font><font face='Impact' size='20' color='#ffffff'> punto(s) </font>" ;

header('refresh:3; url=ruleta.php');
?>
</div>

</body>
</html>
