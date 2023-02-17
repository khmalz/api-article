<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body,
            'published' => $this->created_at->toDateTimeString(),
            'subject' => $this->subject->name,
            'user' => $this->user->name,
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}