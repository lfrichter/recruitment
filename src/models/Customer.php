<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    // protected $fillable = ['customer', 'user_id', 'question_id'];

    // public function upvotes()
    // {
    //     return $this->hasMany('\Models\Upvote');
    // }
}
