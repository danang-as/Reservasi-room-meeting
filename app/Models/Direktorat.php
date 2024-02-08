<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_direktorat'];
    protected $table = 'direktorat';
    public $timestamps = false;
}
