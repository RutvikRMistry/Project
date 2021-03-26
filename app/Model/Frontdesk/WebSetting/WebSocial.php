<?php

namespace App\Model\Frontdesk\WebSetting;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $color
 * @property string $icon
 * @property string $link
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class WebSocial extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'color', 'icon', 'link', 'status', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
