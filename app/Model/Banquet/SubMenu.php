<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $main_menu_id
 * @property integer $user_id
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
class SubMenu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sub_menu';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['main_menu_id', 'user_id', 'menu_type', 'name', 'price', 'min_person', 'max_person', 'times', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mainMenu()
    {
        return $this->belongsTo('App\Model\Banquet\MainMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus()
    {
        return $this->hasMany('App\Model\Banquet\Menu');
    }
}
