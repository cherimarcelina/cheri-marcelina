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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Mobile Legends","Jhon", "sony computer", 35000);

$produk3 = new Produk("Dragon Ball");

echo "Komoik :" . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);