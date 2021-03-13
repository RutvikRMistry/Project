<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $main_menu_id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property int $price_per_person
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property MainMenu $mainMenu
 * @property User $user
 */
class Menu_type extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'menu_type';

    /**
     * @var array
     */
    protected $fillable = ['main_menu_id', 'user_id', 'name', 'description', 'status', 'price_per_person', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mainMenu()
    {
        return $this->belongsTo('App\Models\Banquet\MainMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
