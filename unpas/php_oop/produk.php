<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul, $penerbit, $penulis, $harga, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        // & krn semua var dlm func itu asing jd hrus ditimpa
        $this->judul    = $judul;
        $this->penerbit = $penerbit;
        $this->penulis  = $penulis;
        $this->harga    = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe     = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function infoLengkap()
    {
        $infoFull = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) {$this->tipe}";

        if ($this->tipe == "komik") {
            $infoFull .= "- {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "game") {
            $infoFull .= "~{$this->waktuMain} jam.";
        }

        return $infoFull;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str    = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1    = new Produk("naruto", "Jono", "shonen", 12000, 100, 0, "Komik");
$produk2    = new Produk("GTA", "rockstar", "sony", 20000, 0, 30, "Game");


// echo $produk1->getLabel();
// $infoProduk1    = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->infoLengkap();
