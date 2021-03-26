<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $modifier_set_id
 * @property integer $product_id
 */
class ResProductModifierSet extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['modifier_set_id', 'product_id'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
