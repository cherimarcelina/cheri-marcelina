<?php 

//jualan produk
//Komik
//Game

class Produk {

	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit ="penerbit",
		   $harga = 0;

    public function getLabel(){
    	return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul ="Detektif Canon";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul="Mobile Legends";
// $produk2->Nama_penerbit="JHON";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul ="Naruto";
$produk3->penulis ="Masashi Kishimoto";
$produk3->penerbit ="Shonen Jump";
$produk3->harga = 30000;



$produk4 = new Produk();
$produk4->judul = "Mobile Legends";
$produk4->penulis = "Jhon";
$produk4->penerbit = "sony computer";
$produk4->harga = 35000;

echo "Komoik :" . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();