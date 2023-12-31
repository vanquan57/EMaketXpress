<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'CategoryID';
    protected $fillable =[
        'Name',
        'Description',
        'ParentId',
        'Active',
        'Image',
        'Slug',
        'CategoryProductAvatar'
    ];
    public function promotions(){
        return $this->hasMany(Promotions::class, 'CategoryID');
    }
}
