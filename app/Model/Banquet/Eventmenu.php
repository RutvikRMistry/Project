<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_id
 * @property int $day
 * @property string $type
 * @property integer $sub_menu_id
 * @property int $menu_items
 * @property string $price
 * @property int $service_type_id
 * @property int $counters
 * @property int $head_table
 * @property int $dinning_table
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Eventmenu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_menu';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'day', 'type', 'sub_menu_id', 'menu_items', 'price', 'service_type_id', 'counters', 'head_table', 'dinning_table', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Model\Banquet\Eventdetail', 'event_id');
    }
}
