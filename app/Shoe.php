<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Shoe extends Model
{
    protected $fillable = ['shoe_name', 'shoe_description', 'shoe_amount'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'shoe_brand_FK', 'shoe_brand_ID');
    }
}
