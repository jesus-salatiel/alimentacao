<?php

namespace App\Http\Controllers;

use App\Models\AdminProduct;
use App\Models\EscolaProduct;
use App\Models\User;
use Illuminate\Http\Request;

class AdminRelatorio extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminrelatorio = EscolaProduct::all();
        // dd($adminrelatorio);
        return view('admin.relatorios.index', compact('adminrelatorio'));
    }
}