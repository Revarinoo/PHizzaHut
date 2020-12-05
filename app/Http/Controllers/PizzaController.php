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

    public function __construct(){
        $this->middleware('admin')->only('create');
        $this->middleware('admin')->only('store');
        $this->middleware('admin')->only('destroy');
        $this->middleware('admin')->only('update');
        $this->middleware('admin')->only('edit');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(Auth::check()){
            $user = Auth::user();
        }
        else{
            $user = "Guest";
        }

        $search = $request->get('pizzaname');
        $pizzas = Pizza::where('name','like','%'.$search.'%')->paginate(6);

        return view('pizza.index',compact('pizzas','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PizzaAddRequest $request)
    {
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

        if(Auth::check()){
            $user = Auth::user();
        }
        else{
            $user = "Guest";
        }

        return view('pizza.detail',compact('pizzas', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        return view('pizza.edit',compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
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
        $pizzas = Pizza::findOrFail($id);

        if(Auth::check()){
            $user = Auth::user();
        }
        else{
            $user = "Guest";
        }

        return view('pizza.delete',compact('pizzas', 'user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        if($pizza->image != null) Storage::delete('public/images/'. $pizza->image);
        $pizza->delete();


        return redirect('/pizza');
    }

}
