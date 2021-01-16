<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceHistory extends Model
{
    use HasFactory;
    protected $table = "price_histories";

    public function articles(){
        return $this->belongsTo(Articles::class);
    }
}
