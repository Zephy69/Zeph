<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecom extends Model
{
    use HasFactory;
    protected $fillable=["Name","Price","Description","Code","Phone","Image"];
}
