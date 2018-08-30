<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    //
    protected $guarded = [];

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug( $value, '-');
    }

    public function children(){
        return $this->hasMany( self::class, 'parent_id');
    }
}
