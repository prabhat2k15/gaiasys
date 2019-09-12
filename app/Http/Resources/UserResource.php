<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' =>$this->email,
            'created_at' => $this->created_at,
            'tool_group_ids' => \App\ToolGroupUser::where('user_id', $this->id)
                                                    ->leftJoin('tool_groups', 'tool_groups.id', '=', 'tool_group_user.tool_group_id')
                                                    ->get(['tool_groups.id', 'tool_groups.name']),
        ];
    }
}
