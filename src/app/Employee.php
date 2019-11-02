<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'firstname', 'lastname', 'phone', 'email', 'company'
    ];

    /**
     * Get the company of employee
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company')->select(['id', 'name']);
    }

}
