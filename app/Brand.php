<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{


    public function shoe()
    {
        return $this->hasOne(Shoe::class, 'shoe_brand_FK','shoe_brand_ID');
    }
}
