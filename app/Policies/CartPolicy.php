<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Cart;

class CartPolicy
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

    public function owner(User $user, Cart $cart){
        return $user->id === $cart->user_id;
    }

    public function modify(User $user){
        return $user->role_id === 2;
    }
}
