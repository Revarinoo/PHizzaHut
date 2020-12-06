<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function isAdmin(User $user){
        return $user->role_id === 1;
    }

    public function isMember(User $user){
        return $user->role_id === 2;
    }

}
