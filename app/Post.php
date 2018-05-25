<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts'; // Define the table name
    public $incrementing = true;
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $fillable = ['content', 'restaurant_id', 'user_id'];

    public function comments()
    {
      return $this->hasMany('App\Comment', 'id');
    }

    public function user()
    {
      return $this->belongsTo('App\User', 'id');
    }

    public function restaurant()
    {
      return $this->belongsTo('App\Restaurant', 'id');
    }
}
