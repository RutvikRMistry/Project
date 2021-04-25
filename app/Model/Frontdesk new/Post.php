<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cat_id
 * @property string $title
 * @property string $image
 * @property string $thumb
 * @property string $details
 * @property boolean $status
 * @property int $hit
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cat_id', 'title', 'image', 'thumb', 'details', 'status', 'hit', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
