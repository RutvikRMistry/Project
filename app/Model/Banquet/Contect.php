<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property int $belong_user_id
 * @property string $address
 * @property string $website
 * @property string $job_position
 * @property string $mobile
 * @property string $fax
 * @property string $title
 * @property string $company_avatar
 * @property integer $company_id
 * @property integer $sales_team_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Contect extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'first_name', 'last_name', 'belong_user_id', 'address', 'website', 'job_position', 'mobile', 'fax', 'title', 'company_avatar', 'company_id', 'sales_team_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

}
