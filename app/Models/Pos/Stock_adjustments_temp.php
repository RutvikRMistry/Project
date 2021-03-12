<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class Stock_adjustments_temp extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'stock_adjustments_temp';

    /**
     * @var array
     */
    protected $fillable = ['id'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
