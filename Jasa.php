<?php

namespace Pbo\marketplace;

require_once ('./PropertyConstan.php');

use Pbo\marketplace\produk;

class Jasa {

    use produk;

    public function payment($tipe) {
        return match ($tipe) {
            'Virtual' => "virtual account",
            'Qris' => "Qris",
            default => "Metode pembayaran hanya bisa menggunakan Virtual Account atau Qris"
        };
    }
    
}