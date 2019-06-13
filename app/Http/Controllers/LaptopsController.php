<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;

class LaptopsController extends Controller
{
    public function index() {
        $laptops = Laptop::all();
        return view('laptops.index', ['laptops' => $laptops]);
    }

    public function create() {
        return view('laptops.create');
    }

    public function store() {
        $laptop = new Laptop();
        $laptop->brand = request('brand');
        $laptop->name = request('name');
        $laptop->memory = request('memory');
        $laptop->price = request('price');
        $laptop->save();
        return redirect('/laptops');
    }
}
