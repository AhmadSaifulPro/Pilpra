<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_pradani extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pradani';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pradani','nisn'];
    public $timestamps = false;

    function Pradani()
    {
        return $this->belongsTo(Pradani::class,'id_pradani');
    }

    function DewanAmbalan()
    {
        return $this->belongsTo(DewanAmbalan::class);
    }
}
