<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primary_key = 'id';
    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar'];
}
