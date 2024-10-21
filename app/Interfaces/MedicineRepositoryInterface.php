<?php

namespace App\Interfaces;

interface MedicineRepositoryInterface
{
    public function getAllMedicines();

    // public function getMedicineById($id);

    public function createMedicine(array $medicineData, array $medicineDateData);

    public function addQuantity(array $medicineDateData);

    // public function updateMedicine($id, $data);

    // public function deleteMedicine($id);
}
