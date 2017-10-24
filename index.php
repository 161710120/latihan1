<?php 

require_once '1.php';

$orang = new orang('ayu','cibaduyut','xi rpl 1','pelajar','perempuan');
echo "nama...  " .$orang->nama;
echo "<br>";
echo "tempat_lahir..." .$orang->tempat_lahir;
echo "<br>";
echo "kelas...  " .$orang->kelas;
echo "<br>";
echo "status...  " .$orang->status;
echo "<br>";
echo "jenis kelamin...  " .$orang->jenis_kelamin;
echo "<br>";
?>