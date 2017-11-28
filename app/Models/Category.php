<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = "category";

    // Whitelist
    protected $fillable = ['name'];

    // Blacklist
    // protected $guarded = ['id', 'created_at', 'updated_at'];

}
