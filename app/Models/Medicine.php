<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function medicineDates(): HasMany
    {
        return $this->hasMany(MedicineDate::class);
    }
}
