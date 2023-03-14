<?php

namespace App\Http\Controllers;

use App\Models\EscolaProduct;
use Illuminate\Support\Facades\Gate;

class AdminRelatorio extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin-access');
        $adminrelatorio = EscolaProduct::all();
        // dd($adminrelatorio);
        return view('admin.relatorios.index', compact('adminrelatorio'));
    }
}