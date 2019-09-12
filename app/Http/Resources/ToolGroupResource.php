<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Tool;

class ToolGroupResource extends JsonResource
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
            'tool_group_id' => $this->id,
            'tools' => Tool::where('tool_group_id', $this->id)->get(["id","name", "purchase_date","cost_price"]),
        ];
    }
}
