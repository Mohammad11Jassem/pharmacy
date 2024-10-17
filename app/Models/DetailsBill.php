<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'old_price',
        'medicine_date_id',
        'bill_id',
    ];
}
