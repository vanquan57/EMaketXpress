<?php

namespace App\Models;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='Purchase_order';
    protected $primaryKey = 'Purchase_order_ID';
    protected $fillable = [
        'Name',
        'Address',
        'Time',
        'Phone_number',
        'PromotionCode',
        'OrderStatus',
        'PaymentStatus',
        'TotalAmount',
        'PaymentMethod',
        'VnPayCode',
        'IdUser',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser', 'id');
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'Order_details', 'Purchase_order_ID', 'ProductID')->withPivot([
            'ProductNumbers'
        ]);
    }

}
