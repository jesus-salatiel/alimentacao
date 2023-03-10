<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMealsRequest;
use App\Http\Requests\UpdateMealsRequest;
use App\Models\Meals;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meals::all();
        dd($meals);

        return view('escolas.meals.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealsRequest $request)
    {
        //
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
    public function edit(Meals $meals)
    {
        //
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