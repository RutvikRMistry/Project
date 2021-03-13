<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $day
 * @property int $caterers_id
 * @property string $veg_quoted_price
 * @property string $nonveg_quoted_price
 * @property string $veg_final_price
 * @property string $nonveg_final_price
 * @property string $service_needed
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Caterer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'day', 'caterers_id', 'veg_quoted_price', 'nonveg_quoted_price', 'veg_final_price', 'nonveg_final_price', 'service_needed', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Models\Banquet\Eventdetail', 'event_id');
    }
}
