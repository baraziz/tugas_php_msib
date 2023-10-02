<?php
require_once "Bentuk2D.php";

class Lingkaran extends Bentuk2D
{
   private $jari2;

   function __construct($jari2)
   {
      $this->jari2 = $jari2;
   }

   function namaBidang()
   {
      return "Lingkaran";
   }
   function keterangan()
   {
      return "Jari-jari : " . $this->jari2;
   }
   function luasBidang()
   {
      return (22 / 7) * $this->jari2 * $this->jari2;
   }

   function kelilingBidang()
   {
      return 2 * 3.14 * $this->jari2;
   }
}
