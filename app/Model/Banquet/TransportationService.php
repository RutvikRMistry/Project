<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $service_provided
 * @property int $price
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property GuestPickup[] $guestPickups
 */
class TransportationService extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'transportation_service';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'service_provided', 'price', 'address', 'email', 'phone', 'user_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guestPickups()
    {
        return $this->hasMany('App\Model\Banquet\GuestPickup', 'transportation_id');
    }
}
