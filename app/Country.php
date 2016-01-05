<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';
    
    protected $primaryKey = 'numeric_code';
    
    public function banks()
    {
        return $this->hasMany('App\Bank');
    }
}
