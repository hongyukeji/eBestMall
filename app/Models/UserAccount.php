<?php

namespace App\Models;


class UserAccount extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
