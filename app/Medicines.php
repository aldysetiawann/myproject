<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function transaction()
    {
        return $this->belongsTo('App\Transaction','medicine_transaction','medicine_id','transaction_id')
        ->withPivot('quantity','price')
    }
}
