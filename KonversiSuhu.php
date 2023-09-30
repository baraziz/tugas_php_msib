<?php
class KonversiSuhu
{
   private $satuanSuhuAwal;
   private $besaranSuhu;
   private $satuanSuhuTujuan;

   function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
   {
      $this->satuanSuhuAwal = $satuanSuhuAwal;
      $this->besaranSuhu = $besaranSuhu;
      $this->satuanSuhuTujuan = $satuanSuhuTujuan;
   }

   function konversi()
   {
      if ($this->satuanSuhuAwal == "celcius") {
         if ($this->satuanSuhuTujuan == "fahrenheit") {
            return (9 / 5 * $this->besaranSuhu) + 32;
         }
         if ($this->satuanSuhuTujuan == "rheamur") {
            return (4 / 5) * $this->besaranSuhu;
         }
      }
      if ($this->satuanSuhuAwal == "fahrenheit") {
         if ($this->satuanSuhuTujuan == "celcius") {
            return (5 / 9) * ($this->besaranSuhu - 32);
         }
      }
      if ($this->satuanSuhuAwal == "rheamur") {
         if ($this->satuanSuhuTujuan == "celcius") {
            return (5 / 4) * $this->besaranSuhu;
         }
      }

      return "Salah Input";
   }

   function cetak()
   {
      $hasilKonversi = $this->konversi();
      if ($hasilKonversi == "Salah Input") {
         return "
         <tr>
            <td>
               \"Salah Input\"
            </td>
         </tr>
         ";
      }

      return "
      <tr>
         <td>$this->satuanSuhuAwal</td>
         <td>$this->besaranSuhu</td>
         <td>$this->satuanSuhuTujuan</td>
         <td>$hasilKonversi</td>
      </tr>
      ";
   }
}
