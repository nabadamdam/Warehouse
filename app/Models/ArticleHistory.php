<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleHistory extends Model
{
    use HasFactory;
    protected $table = "article_histories";

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function warehouses()
    {
        return $this->belongsTo(Warehouses::class);
    }

    public function articles()
    {
        return $this->belongsTo(Articles::class);
    }
}
