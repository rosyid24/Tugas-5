<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>WEB PERCOBAAN COOKIE</title>
	<?php date_default_timezone_set('Asia/Jakarta'); ?>
</head>
	
<body>
<div class="container">
	<div class="row">
	<center><h1>WEB COOKIE DAN TIPE BROWSER</h1></center>
	</div>
	<div class="row">
	<center><table border="1">
	<tr><td colspan="2"><center>Cookie telah diupdate dengan data sebagai berikut</center></td></tr>		
	<tr><td>Waktu</td><td><?php echo date("h:i:s:a"); ?></td></tr>
	<tr><td>Browser</td><td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td></tr>
	</table></center></div>
	<br>
	<div class="row">
	<center><table border="1">	
	<tr><td colspan="2"><center>Status Cookie terakhir</center></td></tr>
	<tr><td><?php
	
	if (isset($_COOKIE['wkt'])) 
		echo "Terakhir akses pada 		 : ".$_COOKIE['wkt']."<br>";
	if (isset($_COOKIE['brsr'])) 
		echo "Terakhir akses menggunakan : ".$_COOKIE['brsr'];
	 else
		echo "Anda baru pertama kali akses."
	?>
	</td></tr>
	</table></center>
	</div>

	<br>

	<div class="row">
<center><form action="Starter.html">
		<input type="submit" class="button" value="Kembali Ke Starter">
		<input type="button" class="button" value="Refresh Halaman" onClick="window.location.reload()" >
	</form></center>
		</div>
	
	
	
		 </div>
</body>
</html>

<?php

setcookie('brsr',$_SERVER['HTTP_USER_AGENT'],time()+1800);
setcookie('wkt',date("h:i:s a"),time()+1800);


?>