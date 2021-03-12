<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $token
 * @property string $created_at
 */
class Password_reset extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['email', 'token', 'created_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
