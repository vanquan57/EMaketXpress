<?php

namespace App\Models\Admin;

use App\Models\Cart;
use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
   
    use HasFactory;
    public $timestamps = false;
    public $table = 'Product';
    public $primaryKey = 'ProductID';
    public $fillable = [
        'Name',
        'Price',
        'Sale',
        'Price_sale',
        'Delete_product',
        'Slug',
        'CategoryID'
    ];
    public function Product_details() {
        return $this->hasMany(Product_details::class, 'ProductID');
    }
    public function Product_img() {
        return $this->hasMany(Product_img::class, 'ProductID');
    }
    public function carts(){
        return $this->belongsToMany(Cart::class, 'Product_and_cart', 'Shopping_cartID', 'ProductID')->withPivot([
            'Product_cartID',
            'ProductNumbers',
            'ProductColor',
            'ProductSize',
            'ProductImg'
        ]);
    }
    public function purchaseOrders(){
        return $this->belongsToMany(PurchaseOrder::class, 'Order_details', 'Purchase_order_ID', 'ProductID')->withPivot([
            'ProductNumbers',
            'ProductColor',
            'ProductSize',
            'ProductImg'
        ]);
    }
}
