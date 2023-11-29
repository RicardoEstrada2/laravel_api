<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'address' => $this->address,
            'city' => $this->city,
            'ext_number' => $this->ext_number,
            'in_number' => $this->in_number,
            'state' => $this->state,
            'cp' => $this->cp,
            'country' => $this->country
        ];
    }
}
