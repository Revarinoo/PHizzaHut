<?php

namespace App\Providers;
use App\Policies\PizzaPolicy;
use App\Pizza;
use App\Policies\OrderPolicy;
use App\Order;
use App\Policies\OrderdetailPolicy;
use App\Orderdetail;
use App\Policies\UserPolicy;
use App\User;
use App\Cart;
use App\Policies\CartPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Pizza::class=>PizzaPolicy::class,
        Cart::class=>CartPolicy::class,
        User::class=>UserPolicy::class,
        Order::class=>OrderPolicy::class,
        Orderdetail::class=>OrderdetailPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
