<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$materiais = Material::all();
    	return view('admin.index', compact('materiais'));
    }

    public function novo()
    {
      return view('admin.novo');
    }

    public function editar(Request $request, $id)
    {
      $material = Material::find($id);
      return view('admin.editar', compact('material'));
    }

}
