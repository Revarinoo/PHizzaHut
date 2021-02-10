<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\PizzaAddRequest;
use App\User;
use Illuminate\Http\Request;
use App\Pizza;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PizzaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->get('pizzaname');
        $pizzas = Pizza::where('name','like','%'.$search.'%')->paginate(6);
        $pizzas->appends($request->all());

        return view('pizza.index',compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('modify',Pizza::class);
        $user = Auth::user();
        return view('pizza.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaAddRequest $request)
    {
        $this->authorize('modify',Pizza::class);
        $input = $request->all();

        $file = $request->file('image');
        $imgname = time() . $file->getClientOriginalName();
        Storage::putFileAs('public/images',$file,$imgname);

        $input['image'] = $imgname;
        Pizza::create($input);
        return Redirect::back()->with('msg','Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizzas = Pizza::findOrFail($id);

        return view('pizza.detail',compact('pizzas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        $this->authorize('modify',Pizza::class);
        $user = Auth::user();
        return view('pizza.edit',compact('pizza','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PizzaAddRequest $request, Pizza $pizza)
    {
        $this->authorize('modify',Pizza::class);
        $pizza->name = $request->name;
        $pizza->price = $request->price;
        $pizza->description = $request->description;
        $file = $request->file('image');
        $imgname = time() . $file->getClientOriginalName();
        Storage::putFileAs('public/images',$file,$imgname);
        $pizza->image = $imgname;
        $pizza->save();
        return Redirect::back()->with('msg','Update Success');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->authorize('modify',Pizza::class);
        $pizzas = Pizza::findOrFail($id);
        $user = Auth::user();
        return view('pizza.delete',compact('pizzas','user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $this->authorize('modify',Pizza::class);
        $pizza = Pizza::findOrFail($id);
        if($pizza->image != null) Storage::delete('public/images/'. $pizza->image);
        $pizza->delete();
        return redirect('/pizza');
    }

}
