<?php 

//jualan produk
//Komik
//Game

class Produk {

	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhal,
		   $waktumain,
		   $tipe; 
 
 	public function __construct( $judul = "judul", $penulis ="penulis", $penerbit="penerbit", $harga = 0, $jmlhal=0, $waktumain =0, $tip){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhal = $jmlhal;
		$this->waktumain =  $waktumain;
		$this->tipe = $tip;

		
	}

    public function getLabel(){
    	return "$this->penulis, $this->penerbit";
    }

    public function getInfo(){
    	//komik : Narut | Mashashi, Shonen (Rp.900) - 100 hal
    	$str ="{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    	if($this->tipe == "komik"){
    		$str .= "-{$this->jmlhal} Halaman.";
    	} else if( $this->tipe =="game"){
    		$str .= "~{$this->waktumain} Jam.";
    	}

    	return $str;
    }
}

class CetakInfoProduk {
	  public function cetak(Produk $produk){
	  	$str ="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	  	return $str;
	  }
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");

$produk2 = new Produk("Mobile Legends","Jhon", "sony computer", 35000, 0, 50, "game");

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();