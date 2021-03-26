<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $queue
 * @property string $payload
 * @property boolean $attempts
 * @property boolean $reserved
 * @property int $reserved_at
 * @property int $available_at
 * @property int $created_at
 */
class Job extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'queue', 'payload', 'attempts', 'reserved', 'reserved_at', 'available_at', 'created_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

}
