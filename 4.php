<html>
<head>

<style type="text/css"> 
#capa1{ position:absolute;z-index:1; }
#capa2{ position:center;z-index:0; } 
</style>
</head>

<body bgcolor="#434752">


<div id=capa2 align="center" vertical-align="center" >
<img src="header.png"  align="center"><br>

<?php
session_start();
echo "<font size='6' face='Impact' color='#ffffff'> Puntaje: </font> <font size='6' face='Impact' color='#1fbba6'> ".$_SESSION['puntaje']." </font>" ;

?>
<br><br><br>
<img src="ciencia.gif"  align="center">

</div>

<?php
header('refresh:5; url=ciencia.php');  
?>
</body>
</html>