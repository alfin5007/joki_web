<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relastions\BelongsTo;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'base_price',
        'description',
    ];
    public function category():BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    
}
