<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $connection_type
 * @property string $capability_profile
 * @property string $char_per_line
 * @property string $ip_address
 * @property string $port
 * @property string $path
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property BusinessLocation[] $businessLocations
 */
class Printer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'connection_type', 'capability_profile', 'char_per_line', 'ip_address', 'port', 'path', 'created_by', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('App\Model\Pos\Business');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businessLocations()
    {
        return $this->hasMany('App\Model\Pos\BusinessLocation');
    }
}
