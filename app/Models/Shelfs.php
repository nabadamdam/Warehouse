<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelfs extends Model
{
    use HasFactory;
    protected $table = "shelfs";

    public function warehouseareas()
    {
        return $this->belongsTo(Warehouseareas::class);
    }

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
