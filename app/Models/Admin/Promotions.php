<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'PromotionID';
    protected $fillable = [
        'PromotionName',
        'PromotionCode',
        'DiscountAmount',
        'DiscountType',
        'StartDate',
        'EndDate',
        'Active',
        'CategoryID',
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'CategoryID');
    }
}
