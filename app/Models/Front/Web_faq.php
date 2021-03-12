<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property string $created_at
 * @property string $updated_at
 */
class Web_faq extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['question', 'answer', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

}
