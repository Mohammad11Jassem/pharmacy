<?php

namespace App\DTOs;

class MedicineDTO
{
    public function __construct(
        public string $name,
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }

    public static function fromArray( $data): self
    {
        return new self(
            $data['name'],

        );
    }


}
