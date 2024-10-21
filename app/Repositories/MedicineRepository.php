<?php

namespace App\Repositories;

use App\Interfaces\MedicineRepositoryInterface;
use App\Models\Medicine;
use App\Models\MedicineDate;

class MedicineRepository implements MedicineRepositoryInterface
{
    public function createMedicine(array $medicineData, array $medicineDateData)
    {
        $medicine=Medicine::create($medicineData);
        $medicineData=MedicineDate::create([
            'medicine_id'=>$medicine['id'],
            'price'=>$medicineDateData['price'],
            'quantity'=>$medicineDateData['quantity'],
            'company_name'=>$medicineDateData['company_name'],
            'start_date'=>$medicineDateData['start_date'],
            'end_date'=>$medicineDateData['end_date'],
        ]);
        return Medicine::with('medicineDates')->find($medicine['id']);
    }

    public function addQuantity(array $medicineDateData)
    {
        $medicineData=MedicineDate::create($medicineDateData);
        return Medicine::with('medicineDates')->find($medicineDateData['medicine_id']);
    }

    public function getAllMedicines()
    {
        return Medicine::all();
    }
}
