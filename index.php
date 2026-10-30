<?php
require('./PropertyConstan.php');

use Pbo\marketplace\produk;

 //object
 $produk = new produk ('P001', 'Laptop', 10000000, 5);


//hasil
echo "produk: " . $produk -> nama;
echo "<br>";

echo "kode: " . $produk -> kode ;
echo "<br>";

echo "harga: " . $produk -> harga ;
echo "<br>";

echo "stok: " . $produk -> stok ;
echo "<br>";

echo "pajak: " . $produk -> pajak() . "%" ;
echo "<br>";

echo "total harga setelah pajak: Rp." . $produk -> total ();
