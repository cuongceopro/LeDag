<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function Category(){
    // 投稿は1つのカテゴリーに属する
    return $this->belongsTo('App\GoodCategory','cat_id');
  }
}
