<?php

namespace App\Http\Resources;

use App\Http\Resources\ItemType as ItemTypeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' =>$this->description,
            'like'=>$this->like,
            'price'=>$this->price,
            'category' => new ItemTypeResource($this->itemtypes),
        ];
    }
}
