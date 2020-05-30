<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Shoe extends Model
{
    protected $primaryKey = 'shoes_ID'; // or null

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'uuid';

    protected $fillable = [
        'shoe_name', 'shoe_description'
    ];
}
