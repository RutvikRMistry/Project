<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

class ReservationTax extends Model
{
    public function tax(){
        return $this->belongsTo(TaxManager::class,'tax_id');
    }
}
