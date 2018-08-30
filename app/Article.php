<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $guarded = [];

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug( $value, '-');
    }

    public function categories(){
        return $this->morphToMany('App\Category', 'categoryable');
    }
}
