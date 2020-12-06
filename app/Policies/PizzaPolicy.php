<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;

class PizzaPolicy
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
    public function searchPizza(User $user){
        // if(isset($user)){
        //     dd($user);
        // }else{
        //     return true;
        // }
        echo("as");
        // return(true);
    }
}
