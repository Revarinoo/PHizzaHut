<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class OrderPolicy
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
    public function modify(User $user){
        return $user->role_id === 1;
    }
    public function history(User $user){
        return $user->role_id === 2;
    }

    public function isUser(User $user){
        if($user->role_id == 1 || $user->role_id == 2) return true;
        return false;
    }

}
