<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $address
 * @property string $sex
 * @property string $picture
 * @property boolean $status
 * @property string $password
 * @property string $remember_token
 * @property int $role
 * @property string $created_at
 * @property string $updated_at
 */
class Admin extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'first_name', 'last_name', 'phone', 'address', 'sex', 'picture', 'status', 'password', 'remember_token', 'role', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
