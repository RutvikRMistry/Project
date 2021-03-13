<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property int $resp_staff_id
 * @property string $real_signed_contract
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Company $company
 * @property User $user
 */
class Contract extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['company_id', 'user_id', 'start_date', 'end_date', 'description', 'resp_staff_id', 'real_signed_contract', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Banquet\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
