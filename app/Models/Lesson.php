<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = "lesson";

    // Blacklist
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function sublessons(){
        return $this->hasMany('App\Models\Sublesson');
    }
}
