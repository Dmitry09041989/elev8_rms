<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'surname',
        'email',
        'street',
        'city',
        'postcode',
        'phone_number',
        'height',
        'weight',
    ];

    public function trainings()
    {
        return $this->belongsToMany('App\Models\Training');
    }
}
