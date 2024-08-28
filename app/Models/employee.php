<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location_code',
        'birth_date'
    ];
    
    public function location()
    {
        return $this->belongsTo(location::class, 'location_code', 'code');
    }
}
