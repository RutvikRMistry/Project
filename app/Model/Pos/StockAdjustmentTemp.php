<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class StockAdjustmentTemp extends Model
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
