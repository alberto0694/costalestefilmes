<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $materiais = Material::all();
        return view('site.index', compact('materiais'));
    }

    public function detail(Request $request, $id)
    {
        $material = Material::find($id);
        return view('site.detail', compact('material'));
    }
}
