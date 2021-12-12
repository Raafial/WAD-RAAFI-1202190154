<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class TPModul5 extends Model
{
    use softDeletes;

    protected $table = 'vaccines';
    protected $fillable = [
        'nama',
        'price',
        'description',
        'image'
    ];

    protected $hidden;
}
