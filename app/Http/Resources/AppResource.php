<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'appName' => $this->appName,
            'userAccount' => $this->userAccount,
            'coustomerId' => $this->coustomerId,
            'appSecreteCode' => $this->appSecreteCoden,
            'user_account_id' => $this->user_account_id
        ];
    }
}
