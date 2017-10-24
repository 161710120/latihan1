<?php
class orang {
	public $nama;
	public $tempat_lahir;
	public $kelas;
	public $status;
	public $jenis_kelamin;

	public function __construct($nama,$tempat_lahir,$kelas,$status,$jenis_kelamin) 
   
   {
   	$this->nama = $nama;
   	$this->tempat_lahir = $tempat_lahir;
   	$this->kelas = $kelas;
   	$this->status = $status;
   	$this->jenis_kelamin = $jenis_kelamin;
   }

   
}
?>
