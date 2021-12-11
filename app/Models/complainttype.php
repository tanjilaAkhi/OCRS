<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complainttype extends Model
{
    use HasFactory;
    protected $fillable=['casenumber','casetype','casedetails'];
}
