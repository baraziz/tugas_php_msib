<?php
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D
{
   private $alas;
   private $tinggi;

   function __construct($alas, $tinggi)
   {
      $this->alas = $alas;
      $this->tinggi = $tinggi;
   }

   function namaBidang()
   {
      return "Segitiga";
   }
   function keterangan()
   {
      return "Alas : " . $this->alas . "<br> Tinggi : " . $this->tinggi;
   }
   function luasBidang()
   {
      return 0.5 * $this->alas * $this->tinggi;
   }
   function kelilingBidang()
   {
      $c2 = (($this->alas / 2) ** 2) * ($this->tinggi ** 2);
      $sisiMiring = sqrt($c2);
      return $this->alas + $sisiMiring + $sisiMiring;
   }
}
