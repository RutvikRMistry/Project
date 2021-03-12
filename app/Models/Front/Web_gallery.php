<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category_id
 * @property string $image
 * @property string $type
 * @property string $link
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 */
class Web_gallery extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'image', 'type', 'link', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Front\Category');
    }
}
