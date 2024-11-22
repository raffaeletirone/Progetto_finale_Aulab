<?php

namespace App\Models;

use App\Models\Article;
use App\Models\ArticleAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleAction extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'is_accepted'];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
