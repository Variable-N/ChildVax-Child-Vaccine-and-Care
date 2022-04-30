<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $dates = ['dob'];
    protected $fillable = ["name", "weight", "dob", "user_id"];
    /**
     * Get the parent that owns the Child
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(User::class);
    }

    public function hasGot(Vaccine $vaccine)
    {
        return $this->vaccines->find($vaccine) ? true : false;
    }
    /**
     * The vaccines that belong to the Child
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class);
    }
}
