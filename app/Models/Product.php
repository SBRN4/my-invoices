<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 'products';
    protected $fillable = [
        'item',
        'qty',
        'unit_price',
    ];
}
