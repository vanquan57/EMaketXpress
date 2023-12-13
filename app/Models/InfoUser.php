<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InfoUser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'InfoUser';
    protected $fillable = [
        'Name',
        'PhoneNumber',
        'Province',
        'District',
        'Ward',
        'DetailedAddress',
        'Active',
        'IdUser',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser', 'id');
    }
}
