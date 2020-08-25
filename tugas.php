<?php
class murid{
  
    var $nis;
    var $nama;
    var $kelas;
  
   function dwiky_kompeten() {
     return "Nilai Sudah Kompeten";
    }
   function dwiky_tidakkompeten() {
     return "Nilai Belum Kompeten";
   }
}
  
$murid_dwiky = new murid();
  
$murid_dwiky->nis="11907116";
$murid_dwiky->nama="Dwiky Juliyansyah";
$murid_dwiky->kelas="RPL XI-4";
  
echo $murid_dwiky->nis;
echo "<br />";
echo $murid_dwiky->nama;
echo "<br />";
echo $murid_dwiky->kelas;
echo "<br />";
  
echo $murid_dwiky->dwiky_kompeten();
echo "<br />";
echo $murid_dwiky->dwiky_tidakkompeten();
?>
