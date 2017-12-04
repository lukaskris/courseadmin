<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class Sublesson extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = "sub_lesson";

    // Blacklist
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function lesson(){
      return $this->belongsTo('App\Models\Lesson');
    }
}
