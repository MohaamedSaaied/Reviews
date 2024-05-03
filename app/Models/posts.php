<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    public $table ='posts';
    public $timestamps = false;
    public $fillable=['title','catigoure','path','review'];
}
