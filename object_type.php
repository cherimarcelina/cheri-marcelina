<?php 

//jualan produk
//Komik
//Game

class Produk {

	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

 
 	public function __construct( $judul = "judul", $penulis ="penulis", $penerbit="penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}

    public function getLabel(){
    	return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
	  public function cetak(Produk $produk){
	  	$str ="{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
	  	return $str;
	  }
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Mobile Legends","Jhon", "sony computer", 35000);

echo "Komoik :" . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$inproduk1 = new CetakInfoProduk();
echo $inproduk1->cetak($produk1);