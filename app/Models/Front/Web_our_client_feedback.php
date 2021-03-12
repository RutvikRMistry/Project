<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $feed
 * @property string $name
 * @property string $title
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Web_our_client_feedback extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['feed', 'name', 'title', 'image', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

}
