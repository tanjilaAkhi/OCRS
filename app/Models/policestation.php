<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policestation extends Model
{
    use HasFactory;

    protected $fillable=['dmp','name','address','telephone','cell','email'];
   

}