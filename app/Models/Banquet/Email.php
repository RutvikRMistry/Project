<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $assign_customer_id
 * @property string $to
 * @property string $from
 * @property string $subject
 * @property string $message
 * @property boolean $read
 * @property boolean $delete_sender
 * @property boolean $delete_receiver
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Email extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['assign_customer_id', 'to', 'from', 'subject', 'message', 'read', 'delete_sender', 'delete_receiver', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
