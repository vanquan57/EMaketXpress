<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Product_details';
    protected $fillable = [
        'Quantity_sold',
        'Available_quantity',
        'Description',
        'Size',
        'ProductID'
    ];
    public function Product() {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
