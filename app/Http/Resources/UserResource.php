<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'u_id ' => $this->u_id ,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'age' => $this->age,
            'gender' => $this->gender,
            'city' => $this->city,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
