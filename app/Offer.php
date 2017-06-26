<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'client_name', 'description',
    ];

    /**
     * The products that belong to the offer.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('qte');
    }
}
