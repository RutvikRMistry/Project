<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
