<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_img extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'Product_imgID';
    protected $table = 'Product_img';
    protected $fillable = [
        'Img',
        'ParentId',
        'ProductID',
        'Color',
    ];
    public function Product() {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
