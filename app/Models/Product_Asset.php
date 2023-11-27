<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Asset extends Model
{
    use HasFactory;
    protected $table = 'products_assets';

    protected $fillable = ['name', 'product_id', 'url', 'types_games_assets'];
}
