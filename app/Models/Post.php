<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory , SoftDeletes;

    // protected $dates = ['trachedFiles'];

    protected $fillable = [

     'name',
      'description'

    ];

    public function user(){
        
      return $this->belongsTo(User::class);

  }
  public function comments(){
    return $this->hasMany(Comment::class);
  }

}
