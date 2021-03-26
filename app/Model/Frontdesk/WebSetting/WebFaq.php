<?php

namespace App\Model\Frontdesk\WebSetting;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $question
 * @property string $answer
 * @property string $created_at
 * @property string $updated_at
 */
class WebFaq extends Model
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
    protected $fillable = ['question', 'answer', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
