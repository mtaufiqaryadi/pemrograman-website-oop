<?php
    include "pengurusBEM.php";
    class menteri extends pengurusBEM {
        public function __construct($nama){
          $this->nama = $nama;
        }
        public function getNama() {
           echo "$this->nama";
        }
        public function setJabatan($jabatan) { // method
           $this->jabatan = $jabatan;
        }
        public function getJabatan() {
           echo "$this->jabatan";
        }
        public function setNIM($nim){
           $this->nim = $nim;    
        }
        public function getNIM(){
           echo "$this->nim";
        }
        public function setAngkatan($angkatan){
           $this->angkatan = $angkatan;    
        }
        public function getAngkatan(){
           echo "$this->angkatan";
        }
        public function setFoto($foto){
           $this->foto = $foto;    
        } 
        public function getFoto(){
           echo "$this->foto";
        }
    }
?>
