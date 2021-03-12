<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $color
 * @property string $icon
 * @property string $link
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class Web_social extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'color', 'icon', 'link', 'status', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

}
