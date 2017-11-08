<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
}

Admin::grid(User::class, function (Grid $grid) {

    $grid->id('ID')->sortable();

    $grid->name();
    $grid->email();

    $grid->column('profile.age');
    $grid->column('profile.gender');

    //or
    $grid->profile()->age();
    $grid->profile()->gender();

    $grid->created_at();
    $grid->updated_at();
});
