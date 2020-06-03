<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function shoes()
    {
        return $this->hasMany(Shoe::class, 'shoe_brand_FK','id');
    }
}
