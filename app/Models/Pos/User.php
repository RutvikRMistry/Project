<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $surname
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $language
 * @property string $contact_no
 * @property string $address
 * @property float $cmmsn_percent
 * @property boolean $super_admin
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property CashRegister[] $cashRegisters
 * @property PackagePermission[] $packagePermissions
 * @property Session[] $sessions
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['surname', 'first_name', 'last_name', 'username', 'email', 'password', 'language', 'contact_no', 'address', 'cmmsn_percent', 'super_admin', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashRegisters()
    {
        return $this->hasMany('App\Models\Pos\CashRegister');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packagePermissions()
    {
        return $this->hasMany('App\Models\Pos\PackagePermission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sessions()
    {
        return $this->hasMany('App\Models\Pos\Session');
    }
}
