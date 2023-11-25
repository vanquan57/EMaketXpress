<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Shopping_cart';
    protected $primaryKey = 'Shopping_cartID';
    protected $fillable = [
        'IdUser',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser', 'id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'Product_and_cart', 'Shopping_cartID', 'ProductID')->withPivot([
            'Product_cartID',
            'ProductNumbers',
            'ProductColor',
            'ProductSize',
            'ProductImg'
        ]);
    }
}
