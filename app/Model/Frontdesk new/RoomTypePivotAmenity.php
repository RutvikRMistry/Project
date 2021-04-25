<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

class RoomTypePivotAmenity extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Room_type_pivot_amenity';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
