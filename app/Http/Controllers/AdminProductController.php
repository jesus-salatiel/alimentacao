<?php

namespace App\Http\Controllers;

use App\Models\AdminProduct;
use Illuminate\Http\Request;
use App\Models\EscolaProduct;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;



class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminproduto = EscolaProduct::all();
        Gate::authorize('admin-acess');
        return view('admin.produtos.index', compact('adminproduto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin-acess');
        return view('admin.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        AdminProduct::create($request->all());
        Gate::authorize('admin-acess');
        return Redirect::route('admin.produtos.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdminProduct $adminProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $adminproduto = AdminProduct::find($id);
        // dd($adminproduto);
        Gate::authorize('admin-acess');
        return view('admin.produtos.edit', compact('adminproduto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $adminProduct = AdminProduct::find($id);

        $adminProduct->update($request->all());

        Gate::authorize('admin-acess');
        return Redirect::route('admin.produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminProduct  $adminProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $adminProduct = AdminProduct::findOrFail($id);
        $adminProduct->delete();
        Gate::authorize('admin-acess');
        // dd($adminProduct);
        return Redirect::route('admin.produtos.index');
    }
}