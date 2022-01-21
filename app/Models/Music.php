<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Music extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'music';

    protected $fillable = ['artist', 'album', 'category_id', 'name', 'image', 'music'];

    protected $dates = ['deleted_at'];

}
