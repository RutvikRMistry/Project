<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property RoomTypePivotAmenity[] $roomTypePivotAmenities
 */
class Amenity extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'image', 'description', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomTypePivotAmenities()
    {
        return $this->hasMany('App\Model\Front\RoomTypePivotAmenity');
    }
}
