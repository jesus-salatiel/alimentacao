<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealsRequest;
use App\Http\Requests\UpdateMealsRequest;
use App\Models\Meals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Gate::authorize('user-access');
        $user_school = Auth::user();
        // dd($user_school, $meals);
        $user_escola = Meals::where('escola_sede_id', $user_school->escola_sede_id )->get();

        // dd($meals);

        return view('escolas.meals.index', compact('user_school', 'user_escola'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        Gate::authorize('user-access');
        $user = Auth::user();
        // dd($user);
        return view('escolas.meals.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('user-access');
        Meals::create($request->all());
        // dd($request);
        return Redirect::route('escolas.meals.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(Meals $meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('user-access');
        $mealsEscola = Meals::find($id);

        // dd($escolaProduto);
        return view('escolas.meals.edit', compact('mealsEscola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealsRequest  $request
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealsRequest $request, Meals $meals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meals $meals)
    {
        //
    }
}