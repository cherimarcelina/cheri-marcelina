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
		   $waktumain;
 
 	public function __construct( $judul = "judul", $penulis ="penulis", $penerbit="penerbit", $harga = 0, $jmlhal=0, $waktumain =0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhal = $jmlhal;
		$this->waktumain =  $waktumain;
		
	}

    public function getLabel(){
    	return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
    	
    	$str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    	
    	return $str;
    }
}


class Komik extends Produk{
	public function getInfoProduk(){
		 $str ="Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) -{$this->jmlhal} Halaman.";
		 return $str;
	}
}


class Game extends Produk{
	public function getInfoProduk(){
		 $str ="Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~{$this->waktumain} jam.";
		 return $str;
	}
}


class CetakInfoProduk {
	  public function cetak(Produk $produk){
	  	$str ="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	  	return $str;
	  }
}




$produk1 = new komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

$produk2 = new Game("Mobile Legends","Jhon", "sony computer", 35000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();