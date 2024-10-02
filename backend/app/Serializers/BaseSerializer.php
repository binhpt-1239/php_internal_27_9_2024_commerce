<?php

namespace App\Serializers;

abstract class BaseSerializer
{
    /**
     * Get attributes based on type.
     *
     * @param  string  $type
     * @return array
     */
    protected static function getAttributesByType($type)
    {
        if (defined("static::" . strtoupper($type))) {
            return constant("static::" . strtoupper($type));
        }
        return [];
    }

    /**
     * Transform the resource data.
     *
     * @param  mixed  $resource
     * @param  string  $type
     * @return array
     */
    public static function serialize($resource, $type = 'basic')
    {
        $attributes = static::getAttributesByType($type);
        $data = [];
        foreach ($attributes as $attribute) {
            if (isset($resource->$attribute)) {
                $data[$attribute] = $resource->$attribute;
            } elseif (method_exists($resource, $attribute)) {
                $data[$attribute] = $resource->$attribute();
            }
        }
        return $data;
    }

    /**
     * Transform a collection of resources.
     *
     * @param  \Illuminate\Support\Collection  $resources
     * @param  string  $type
     * @return array
     */
    public static function serializeCollection($resources, $type = "basic")
    {
        return $resources->map(function ($resource) use ($type) {
            return static::serialize($resource, $type);
        })->toArray();
    }
}
