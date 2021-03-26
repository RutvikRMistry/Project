<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $main_menu_id
 * @property int $sub_menu_id
 * @property int $user_id
 * @property string $name
 * @property int $menu_type
 * @property string $description
 * @property string $status
 * @property string $price
 * @property string $hours
 * @property string $persons
 * @property string $additional
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property MainMenu $mainMenu
 * @property SubMenu $subMenu
 * @property User $user
 */
class Menu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var array
     */
    protected $fillable = ['main_menu_id', 'sub_menu_id', 'user_id', 'name', 'menu_type', 'description', 'status', 'price', 'hours', 'persons', 'additional', 'created_at', 'updated_at', 'deleted_at'];

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
    public function subMenu()
    {
        return $this->belongsTo('App\Model\Banquet\SubMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }
}
