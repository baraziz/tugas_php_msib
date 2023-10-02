<?php
require_once "Bentuk2D.php";

class PersegiPanjang extends Bentuk2D
{
   private $panjang;
   private $lebar;

   function __construct($panjang, $lebar)
   {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
   }

   function namaBidang()
   {
      return "Persegi Panjang";
   }
   function keterangan()
   {
      return "Panjang : " . $this->panjang . "<br> Lebar : " . $this->lebar;
   }
   function luasBidang()
   {
      return $this->panjang * $this->lebar;
   }
   function kelilingBidang()
   {
      return $this->panjang * 2 + $this->lebar * 2;
   }
}
