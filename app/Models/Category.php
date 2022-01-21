<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'category';

    protected $fillable = ['name'];

    protected $dates = ['deleted_at'];

    public function music()
    {
        return $this->hasMany('App\Models\Music', 'category_id');
    }

}
