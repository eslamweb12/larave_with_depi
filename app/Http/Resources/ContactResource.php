<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'username'=>$this->username,
            'title'=>$this->title,
            'message'=>$this->message,
            'create_at'=>$this->created_at->format('d-m-Y'),
            'published_at'=>$this->created_at->diffForHumans(),


        ];
    }
}
