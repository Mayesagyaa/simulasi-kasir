<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualans';
    protected $fillable = [
        'penjualan_id',
        'produk_id',
        'jml_produk',
        'sub_total'
    ];

    public function Penjualan(){
        return $this->hasOne(Penjualan::class, 'id','penjualan_id');
    }

    public function Produk(){
        return $this->hasOne(Produk::class, 'id', 'produk_id');
    }
}
