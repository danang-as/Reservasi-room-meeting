<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_ruangan','kapasitas_ruangan'];
    protected $table = 'ruangan';
    public $timestamps = false;
}
