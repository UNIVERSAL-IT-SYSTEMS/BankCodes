<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banks';
    
    public function Country()
    {
        return $this->belongsTo('App\Country', 'foreign_key','numeric_code');
    }
    
    
}
