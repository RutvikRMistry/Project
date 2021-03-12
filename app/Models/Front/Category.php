<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property WebGallery[] $webGalleries
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'status', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webGalleries()
    {
        return $this->hasMany('App\Models\Front\WebGallery');
    }
}
