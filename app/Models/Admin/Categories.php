<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable =[
        'Name',
        'Description',
        'ParentId',
        'Active'
    ];
}