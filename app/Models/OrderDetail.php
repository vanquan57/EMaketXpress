<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;
    protected $table ='order_details';
    protected $fillable = [
        'Order_detailsID',
        'Purchase_order_ID',
        'ProductID',
        'ProductNumbers',
    ];
    public function purchaseOrder() {
        return $this->belongsTo(PurchaseOrder::class, 'Purchase_order_ID', 'Purchase_order_ID');
    }
    
}
