<?php
	require "koneksiMVC.php";
	class m_programKerja {
		private $nomorProgram; 
		private $namaProgram;
		private $suratKeterangan;
		public function setPogramKerja($nomorProgram, $namaProgram,$suratKeterangan){ 
			$query=("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
			$masuk = mysqli_query($GLOBALS['con'],$query);
		}
		public function getSemuaPogramKerja() {
		    $query=("SELECT * FROM proker");
			$rs =mysqli_query($GLOBALS['con'],$query);
	    	$rows = array();
			$index = 0;
			while ($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
	        	$rows[$index] = $row;
				$index++;
		 	} 
	     	return $rows;
	  	}
		public function delProgram($where){
			$query 	= ("DELETE FROM proker WHERE nomorProgram = '$where'");
			$hapus = mysqli_query($GLOBALS['con'],$query);
			return $hapus;
		}
		function getPogramKerja($nomorProgram){
			$query=("SELECT * FROM proker where nomorProgram = '$nomorProgram'");
			$qry = mysqli_query($GLOBALS['con'],$query);
			$row=mysqli_fetch_array($qry,MYSQLI_ASSOC);
			return $row;
		}
		function editProgramKerja($no, $nama, $sk){
			$query 	= "UPDATE proker SET namaProgram = '$nama', nomorProgram = '$no', suratKeterangan = '$sk' WHERE nomorProgram = '$no'";
			$qry = mysqli_query($GLOBALS['con'],$query);
		}
	}
?>
