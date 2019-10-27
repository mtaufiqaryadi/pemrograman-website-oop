<?php
	session_start();
	if (empty($_SESSION['session_username'])){
		echo "<center>Anda harus login terlebih dahulu";
	  	echo '<p><a href="index.php">Login disini</a></p></center>';
	} else {
		include_once("c_programKerjaMenteri.php");
		$controller = new c_programKerja();
		$controller->invoke();
		echo '<center><p><br>anda login sebagai ryandrie (Menteri)<br><a href="logout.php">Logout</a></p>';
	}
?>
