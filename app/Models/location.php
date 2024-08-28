<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'location_name'
    ];

    public function employee(){
        return $this->hasMany(employee::class, 'location_code', 'code');
    }
}
