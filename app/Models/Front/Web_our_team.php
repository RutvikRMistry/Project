<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
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
class Web_our_team extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'title', 'fb', 'tw', 'lin', 'gp', 'image', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

}
