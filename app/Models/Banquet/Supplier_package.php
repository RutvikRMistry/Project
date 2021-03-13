<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $supplier_id
 * @property string $supplier_type
 * @property string $package_name
 * @property string $price
 * @property string $person
 * @property string $services
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 */
class Supplier_package extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'supplier_id', 'supplier_type', 'package_name', 'price', 'person', 'services', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
