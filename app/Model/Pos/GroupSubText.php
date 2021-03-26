<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $group_tax_id
 * @property int $tax_id
 */
class GroupSubText extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'group_sub_taxes';

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
