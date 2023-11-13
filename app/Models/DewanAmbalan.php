<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DewanAmbalan extends Authenticable
{
    use HasApiTokens,HasFactory, Notifiable;

    protected $table = 'dewan_ambalan';
    protected $primaryKey = 'id';
    protected $fillable = ['nisn','password'];
    public $timestamps = false;
}
