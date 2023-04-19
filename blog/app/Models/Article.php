<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    // Relacion de uno a muchos inversa (article-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relacion de uno a muchos (article-comments)
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // Realcion de uno a mucho inversa (articles-category)
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
