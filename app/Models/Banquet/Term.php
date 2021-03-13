<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $food_beverage
 * @property string $administrative_fees
 * @property string $function_room_assignement
 * @property string $guarantees
 * @property string $menu_pricing
 * @property string $decoration
 * @property string $security_parking
 * @property string $damages
 * @property string $service_fees
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 */
class Term extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'food_beverage', 'administrative_fees', 'function_room_assignement', 'guarantees', 'menu_pricing', 'decoration', 'security_parking', 'damages', 'service_fees', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
