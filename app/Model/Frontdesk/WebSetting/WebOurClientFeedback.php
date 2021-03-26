<?php

namespace App\Model\Frontdesk\WebSetting;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $feed
 * @property string $name
 * @property string $title
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class WebOurClientFeedback extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'web_our_client_feedbacks';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['feed', 'name', 'title', 'image', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
