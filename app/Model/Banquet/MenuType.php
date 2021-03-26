<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $main_menu_id
 * @property integer $user_id
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
class MenuType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'menu_type';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['main_menu_id', 'user_id', 'name', 'description', 'status', 'price_per_person', 'created_at', 'updated_at', 'deleted_at'];

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
}
