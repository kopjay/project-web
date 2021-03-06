<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'product';

    protected $fillable = ['name', 'price', 'type', 'color', 'image'];

    protected $dates = ['deleted_at'];

}
