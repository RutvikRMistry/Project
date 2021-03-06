<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $state_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property State $state
 * @property Bookingdetail[] $bookingdetails
 * @property Company[] $companies
 * @property Eventdetail[] $eventdetails
 * @property Lead[] $leads
 */
class City extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['state_id', 'name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Banquet\State');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingdetails()
    {
        return $this->hasMany('App\Models\Banquet\Bookingdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {
        return $this->hasMany('App\Models\Banquet\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventdetails()
    {
        return $this->hasMany('App\Models\Banquet\Eventdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leads()
    {
        return $this->hasMany('App\Models\Banquet\Lead');
    }
}
