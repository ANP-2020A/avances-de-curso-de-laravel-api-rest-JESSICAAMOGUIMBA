<?php

namespace App\Http\Resources;

use App\Category;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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
            'tittle' => $this->tittle,
            'body' => $this->body,
            'user'=>"/api/users/".$this->user_id,
            'category'=>"/api/categories/".$this->categoy_id,
            'image'=>$this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


        ];
    }

}
