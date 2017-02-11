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
        'title',
        'body'
    ];

    public $timestamps = true;

    public function author() {

        return $this->belongsTo(User::class, 'author_id');
    }
}
