<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nid extends Model
{
    use HasFactory;
    
    protected $fillable=['nid_no','name','fname','mname','cell','email' ,'birthdate','address'];
}
