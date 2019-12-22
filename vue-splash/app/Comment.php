<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  // JSONに含める属性
  protected $visible = [
    'author', 'content',
  ];

  // usersテーブルとリレーションをはる
  // @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  public function author()
  {

    return $this->BelongsTo('App\User', 'user_id', 'id', 'users');
  }

}
