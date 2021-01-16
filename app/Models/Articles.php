<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $table = "articles";

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function shelfs()
    {
        return $this->belongsTo(Shelfs::class);
    }

    public function warehouses()
    {
        return $this->belongsTo(Warehouses::class);
    }

    public function pictures()
    {
        return $this->hasMany(Pictures::class);
    }

    public function priceHistory()
    {
        return $this->hasMany(PriceHistory::class);
    }
    
    public function articlehistory()
    {
        return $this->hasMany(Articlehistory::class);
    }
}
