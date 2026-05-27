<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Importando o modelo do banco

class ProductController extends Controller
{
    public function index() {
        $produtos = Product::where('is_active', true)->get();
        return view('landing', compact('produtos'));
    }

    public function admin() {
        $produtos = Product::all();
        return view('dashboard', compact('produtos'));
    }

    public function store(Request $request) {
        $produto = new Product();
        
        $produto->name = $request->name;
        $produto->description = $request->description;
        $produto->price = $request->price;
        
        $produto->save();
        
        return redirect('/admin');
    }
}