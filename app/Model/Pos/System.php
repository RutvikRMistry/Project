<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $key
 * @property string $value
 */
class System extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'system';

    /**
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
