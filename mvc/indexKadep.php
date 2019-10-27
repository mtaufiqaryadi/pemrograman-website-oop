<?php
	session_start();
	if (empty($_SESSION['session_username'])){
		echo "<center>Anda harus login terlebih dahulu";
	    echo '<p><a href="index.php">Login disini</a></p></center>';
	} else {
		include_once("c_programKerjaKadep.php");
		$controller = new c_programKerja();
		if (isset($_GET['hapus'])) {
			$controller->delete($_GET['hapus']);
		} else if (isset($_GET['edit'])) {
			$controller->viewUpdate($_GET['edit']);
		} else if (isset($_GET['do'])) {
			$controller->viewInsert();
		} else {
			$controller->invoke();
		}
		echo '<center><p><br>anda login sebagai taufiq (Kepala Departemen)<br><a href="logout.php">Logout</a></p>';
	}
?>
