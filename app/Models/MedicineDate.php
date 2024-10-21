<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicineDate extends Model
{
    use HasFactory;

    protected $fillable = ['medicine_id','price', 'quantity', 'company_name','start_date','end_date'];

    public function medicine():BelongsTo
    {
        return $this->belongsTo(Medicine::class,'medicine_id');
    }
}
