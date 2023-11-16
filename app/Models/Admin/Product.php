<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
   
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Product';
    protected $fillable = [
        'Name',
        'Price',
        'Price_sale',
        'Delete_product',
        'Slug',
        'CategoryID'
    ];
    public function Product_details() {
        return $this->hasMany(Product_details::class, 'ProductID');
    }
}
