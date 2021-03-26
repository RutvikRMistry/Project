<?php

namespace App\Model\Frontdesk\WebSetting;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $fb
 * @property string $tw
 * @property string $lin
 * @property string $gp
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class WebOurTeam extends Model
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
    protected $fillable = ['name', 'title', 'fb', 'tw', 'lin', 'gp', 'image', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
