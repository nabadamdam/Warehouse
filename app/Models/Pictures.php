<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;
    protected $table = "pictures";

    public function articles()
    {
        return $this->belongsTo(Articles::class);
    }
}
