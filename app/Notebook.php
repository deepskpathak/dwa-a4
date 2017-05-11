<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = ['name'];

    public function notes() {
        # Notebook has many Notes
        # Define a one-to-many relationship.
        return $this->hasMany('App\Note');
    }


    public function user() {
        return $this->belongsTo('App\User');
    }

}
