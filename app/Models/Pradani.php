<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pradani extends Model
{
    use HasFactory;
    protected $table = 'pradani';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kelas','foto','jumlah_suara'];
    public $timestamps = false;
}
