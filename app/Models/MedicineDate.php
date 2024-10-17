<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineDate extends Model
{
    use HasFactory;

    protected $fillable = ['medicine_id', 'quantity', 'company_name','start_date','end_date'];
}
