<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    use HasFactory;

    //ini isi table nya dulu biar bisa muncul 
    //ini duah bener kenapa tadi no hp wa gak muncul kamu typo 
    //harusnya N0_HP_WA tapi kamu tulis No_HP_Wa a nya kecil makanya dak bisa
    //itu aja sih  
    protected $fillable = [
        'Nama', 'No_Hp_WA','Alamat'
        ];

}
