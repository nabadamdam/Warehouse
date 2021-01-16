<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    
    public function roles()
    {
        return $this->belongsTo(Roles::class);
    }
    
    public function articlehistory()
    {
        return $this->hasMany(Articlehistory::class);
    }
}
