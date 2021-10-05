<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreRestaurantResquest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('name', 'asc')->get();

        $restaurantsuser = Restaurant::where('user_id', '=', '1')->orderBy('name', 'asc')->get();

        return view('restaurants.ListarRestaurants', compact('restaurantsuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Auth::user()->type != 'admin' & Auth::user()->type != 'owner')
        {
            Session::flash('failture', 'Usted no tiene permisos para crear restaurantes');

            return redirect(route('front_page.index'));
        }

        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id');
        return view ("restaurants.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantResquest $request)
    {

        if(Auth::user()->type != 'admin' & Auth::user()->type != 'owner')
        {
            Session::flash('failture', 'Usted no tiene permisos para crear restaurantes');

            return redirect(route('front_page.index'));
        }

        $input = $request->all();

        // TODO: Realizar la validacion de los datos de entrada

        $restaurant = new Restaurant();
        $restaurant->fill($input);
        $restaurant->user_id = Auth::id(); 
        $restaurant->save();

        Session::flash('success', 'Restaurante agregado exitosamente');

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.MostrarRestaurantes', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }


    //mis metodos


    public function showFrontPage(Request $request)
    {

        $filter = $request['filter'] ?? null;

        if(!isset($request['filter']))
            $restaurants = Restaurant::orderBy('name', 'asc')->simplePaginate(4);
        else
        {
            $restaurants = Restaurant::orderBy('name', 'asc')->where('category_id', '=', $request['filter'])->simplePaginate(4);
            $restaurants->appends(['filter' => $filter]);
        }
            
        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id');

        return view('front_page.index', compact('restaurants', 'categories', 'filter'));
    }

}
