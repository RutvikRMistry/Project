<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $main_menu_id
 * @property int $user_id
 * @property int $menu_type
 * @property string $name
 * @property string $price
 * @property int $min_person
 * @property int $max_person
 * @property string $times
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property MainMenu $mainMenu
 * @property User $user
 * @property Menu[] $menus
 */
class Sub_menu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sub_menu';

    /**
     * @var array
     */
    protected $fillable = ['main_menu_id', 'user_id', 'menu_type', 'name', 'price', 'min_person', 'max_person', 'times', 'created_at', 'updated_at', 'deleted_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus()
    {
        return $this->hasMany('App\Models\Banquet\Menu');
    }
}
