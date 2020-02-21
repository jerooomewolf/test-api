<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Scope a query to only retrieve the last 5 records
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLast($query)
    {
        return $query->latest()->take(5);
    }

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
