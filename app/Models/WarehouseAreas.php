<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseAreas extends Model
{
    use HasFactory;
    protected $table = "warehouse_areas";

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    
    public function shelfs()
    {
        return $this->hasMany(Shelfs::class);
    }
}
