<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    use HasFactory;
    protected $table = "warehouses";

    public function cities()
    {
        return $this->belongsTo(Cities::class);
    }

    public function addresses()
    {
        return $this->belongsTo(Addresses::class);
    }
    
    public function warehouseareas()
    {
        return $this->hasMany(Warehouseareas::class);
    }

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
    
    public function articlehistory()
    {
        return $this->hasMany(Articlehistory::class);
    }
}
