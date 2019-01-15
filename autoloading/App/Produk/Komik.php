<?php 

class Komik extends Produk implements InfoProduk{

	public $jmlhal;

	public function __construct($judul = "judul", $penulis ="penulis", $penerbit="penerbit", $harga = 0, $jmlhal =0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlhal = $jmlhal;
	}



   public function getInfo(){
    	
    	$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    	
    	return $str;
    }


	public function getInfoProduk(){
		 $str ="Komik : ". $this->getInfo()." -{$this->jmlhal} Halaman.";
		 return $str;
	}
}