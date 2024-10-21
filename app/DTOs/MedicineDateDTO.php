<?php

namespace App\DTOs;

class MedicineDateDTO
{
    public function __construct(
        public ?int $medicine_id=null,
        public string $start_date,
        public string $end_date,
        public string $company_name,
        public int $quantity,
        public float $price
    ) {}

    public function toArray(): array
    {
        return [
            'medicine_id' => $this->medicine_id ?? null,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'company_name' => $this->company_name,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ];
    }

    public static function fromArray($data): self
    {
        return new self(
            $data['medicine_id'] ?? null,
            $data['start_date'],
            $data['end_date'],
            $data['company_name'],
            $data['quantity'],
            $data['price']
        );
    }


}
