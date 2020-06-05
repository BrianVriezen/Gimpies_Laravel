<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shoe
 * @package App
 * @property-read Brand $brand
 */
class Shoe extends Model
{
    protected $fillable = ['name', 'description', 'amount'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
