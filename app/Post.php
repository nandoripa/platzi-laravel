<?php

namespace PlatziLaravel;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title'
    ];

    public $timestamps = true;

    public function user() {

        return $this->belongsTo(User::class);
    }
}
