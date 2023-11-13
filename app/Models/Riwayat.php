<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayat';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pradana','nisn'];
    public $timestamps = false;

    function Pradana()
    {
        return $this->belongsTo(Pradana::class, 'id_pradana');
    }

    function DewanAmbalan()
    {
        return $this->belongsTo(DewanAmbalan::class);
    }
}
