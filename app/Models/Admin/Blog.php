<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Blog';
    protected $fillable = [
        'BlogAvatar',
        'Name',
        'Description',
    ];
}
