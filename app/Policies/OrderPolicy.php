<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Order;

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

    public function isUser(User $user, Order $order){
        if($user->role_id == 1 || $user->id == $order->user_id) return true;
        return false;
    }

}
