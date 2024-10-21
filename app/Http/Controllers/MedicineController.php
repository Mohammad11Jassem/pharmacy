<?php

namespace App\Http\Controllers;

use App\DTOs\MedicineDateDTO;
use App\DTOs\MedicineDTO;
use App\Http\Requests\Medicine\AddQuantityRequest;
use App\Http\Requests\Medicine\CreateMedicineRequest;
use App\Http\Resources\MedicineResource;
use App\Services\MedicineService;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    protected MedicineService $medicineService;

    public function __construct(MedicineService $medicineService)
    {
        $this->medicineService = $medicineService;
    }

    public function createMedicine(CreateMedicineRequest $createMedicineRequest)
    {
        $medicineDTO=MedicineDTO::fromArray($createMedicineRequest);
        $medicineDateDTO=MedicineDateDTO::fromArray($createMedicineRequest);

        $result = $this->medicineService->createMedicine($medicineDTO, $medicineDateDTO);

        // Check if the result indicates an existing medicine
        if (isset($result['success']) && !$result['success']) {
            return response()->json(['message' => $result['message']], 422);
        }

        return new MedicineResource($result);
    }

    public function addQuantity(AddQuantityRequest $addQuantityRequest)
    {
        $medicineDateDTO=MedicineDateDTO::fromArray($addQuantityRequest);

        $medicine=$this->medicineService->addQuantity($medicineDateDTO);

        return new MedicineResource($medicine);
    }

    public function getAllMedicines()
    {
        return MedicineResource::collection($this->medicineService->getAllMedicines());
    }
}
