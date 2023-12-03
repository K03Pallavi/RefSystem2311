<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontusers extends Model
{
    use HasFactory;
    
    protected $table ="frontusers";
    protected $primaryKey = "userid";
}
