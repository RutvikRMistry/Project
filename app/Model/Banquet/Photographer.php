<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $price
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $wedding_photography_contract_terms
 * @property string $payment
 * @property string $cancellation
 * @property string $reschedule
 * @property string $liability
 * @property string $responsibilities
 * @property string $coverage
 * @property string $image_processing
 * @property string $model_release
 * @property string $copyright
 * @property string $unauthorized_reproduction
 * @property string $approval
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property EventPhotographer[] $eventPhotographers
 */
class Photographer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'price', 'address', 'email', 'phone', 'wedding_photography_contract_terms', 'payment', 'cancellation', 'reschedule', 'liability', 'responsibilities', 'coverage', 'image_processing', 'model_release', 'copyright', 'unauthorized_reproduction', 'approval', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

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
    public function eventPhotographers()
    {
        return $this->hasMany('App\Model\Banquet\EventPhotographer');
    }
}
