<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $business_locations
 * @property int $users
 * @property int $products
 * @property int $invoices
 * @property int $trial_days
 * @property string $price
 * @property string $description
 * @property string $permissions
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Package extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'business_locations', 'users', 'products', 'invoices', 'trial_days', 'price', 'description', 'permissions', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

}
