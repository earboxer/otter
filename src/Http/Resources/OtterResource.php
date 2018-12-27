<?php

namespace Poowf\Otter\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OtterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $transformed = parent::toArray($request);
        $transformed['route_key'] = $this->{parent::getRouteKeyName()};
        $transformed['created_at'] = $this->created_at ? $this->created_at->format('Y-m-d H:i:s') : null;
        $transformed['updated_at'] = $this->updated_at ? $this->updated_at->format('Y-m-d H:i:s') : null;
        $transformed['deleted_at'] = $this->deleted_at ? $this->deleted_at->format('Y-m-d H:i:s') : null;

        return $transformed;
    }

    /**
     * Get the fields and types used by the resource
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }

    /**
     * Get the fields to be hidden in the index
     *
     * @return array
     */
    public function hidden()
    {
        return [];
    }
}