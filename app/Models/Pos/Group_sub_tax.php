<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $group_tax_id
 * @property int $tax_id
 */
class Group_sub_tax extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['group_tax_id', 'tax_id'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
