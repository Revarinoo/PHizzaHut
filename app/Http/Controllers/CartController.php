<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\AddToCartRequest;
use App\Order;
use App\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\User;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddToCartRequest $request)
    {

        $this->authorize('modify',Cart::class);
        $input = $request->all();
        $cart = Cart::where('pizza_id',$request->pizza_id)->first();

        if($cart != null){
            $cart->quantity += $request->quantity;
            $cart->save();
        }
        else{
            $user = Auth::user();
            $input['user_id'] = Auth::user()->id;
            $user->cart()->create($input);
        }

        return Redirect::back()->with('msg','Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('modify',Cart::class);
        if(Auth::user() != null && $user->id === Auth::user()->id){
            $carts = $user->cart;
            return view('cart.cart',compact('carts','user'));
        }
        $this->authorize('owner',$user->cart->first());
    }

    public function checkout(User $user){
        $this->authorize('owner',$user->cart->first());
        $carts = $user->cart;
        $order = new Order;
        $order->user_id = $carts->first()->user_id;
        $order->save();
        foreach ($carts as $cart) {
            $detail = New Orderdetail;
            $detail->order_id = $order->id;
            $detail->pizza_id = $cart->pizza_id;
            $detail->quantity = $cart->quantity;
            $this->destroy($cart->id);
            $detail->save();
        }
        return Redirect::back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('owner',Auth::user()->cart->first());
        $input = $request->all();
        Auth::user()->cart()->whereId($id)->first()->update($input);

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('owner',Auth::user()->cart->first());
        Cart::destroy($id);
        return Redirect::back();
    }
}
