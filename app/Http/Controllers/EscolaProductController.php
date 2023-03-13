<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EscolaProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EscolaProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $escolaProduto = EscolaProduct::where('escola_sede_id', $user->escola_sede_id)->get();

        // dd($escolaProduto);

        return view('escolas.produtos.index', compact('escolaProduto', 'user',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        return view('escolas.produtos.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         EscolaProduct::create($request->all());
        // dd($request);

        return Redirect::route('escolas.produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $escolaProduto = EscolaProduct::find($id);

        // dd($escolaProduto);
        return view('escolas.produtos.edit', compact('escolaProduto'));
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
        $escolaProduct = EscolaProduct::find($id);

        $escolaProduct->update($request->all());


        return Redirect::route('escolas.produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $escolaProduct = EscolaProduct::findOrFail($id);
        $escolaProduct->delete();

        // dd($adminProduct);
        return Redirect::route('escolas.produtos.index');
    }
}
