<?php

namespace App\Services;

use App\DTOs\MedicineDateDTO;
use App\DTOs\MedicineDTO;
use App\Interfaces\MedicineRepositoryInterface;
use App\Models\Medicine;

class MedicineService
{
    protected $medicineRepository;

    public function __construct(MedicineRepositoryInterface $medicineRepository)
    {
        $this->medicineRepository = $medicineRepository;
    }

    public function createMedicine(MedicineDTO $medicineDTO, MedicineDateDTO $medicineDateDTO )
    {
        $medicineData=$medicineDTO->toArray();
        $medicineDateData=$medicineDateDTO->toArray();

        if (Medicine::where('name', $medicineData['name'])->exists()) {
            // Return a message indicating that the medicine already exists
            return [
                'success' => false,
                'message' => 'Medicine with the same name already exists.'
            ];
        }
        return $this->medicineRepository->createMedicine($medicineData,$medicineDateData);
    }

    public function addQuantity(MedicineDateDTO $medicineDateDTO )
    {
        $medicineDateData=$medicineDateDTO->toArray();

        return $this->medicineRepository->addQuantity($medicineDateData);
    }

    public function getAllMedicines()
    {
        return $this->medicineRepository->getAllMedicines();
    }
}
