<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $modifier_set_id
 * @property int $product_id
 */
class Res_product_modifier_set extends Model
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
