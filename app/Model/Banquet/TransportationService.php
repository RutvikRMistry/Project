<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

class TransportationService extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'transportation_Service';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

}
