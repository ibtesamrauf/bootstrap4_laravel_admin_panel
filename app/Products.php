<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = ['category_id', 'name', 'description', 'price', 'in_stock', 'quantity', 'status'];
    
}
