<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id',
        'remainder',
        'price'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
