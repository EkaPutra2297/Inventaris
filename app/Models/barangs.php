<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    public function suppliers()
    {
        return $this->belongsTo('App\suppliers');
        
    }
    
    use HasFactory;
    protected $fillable = [
        'Nama_Barang', 'Jumlah','Harga', 'Supplier'
        ];
}
