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
    	return view('admin', compact('materiais'));
    }
}
