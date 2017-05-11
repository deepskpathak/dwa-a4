<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['title', 'content', 'url'];

    /**
     *
     */
    public function notebook() {
        # note belongs to notebook
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Notebook');
    }
    /**
     *
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
