<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama', 'tgl_pembelian', 'nama_barang', 'harga_satuan', 'jumlah_barang'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
