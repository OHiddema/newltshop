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

    public function edit(Laptop $laptop) {
        // $laptop = Laptop::findOrFail($id);
        // return view('laptops.edit', ['laptop' => $laptop]);
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Laptop $laptop) {
        // $laptop = Laptop::findOrFail($id);
        $laptop->brand = request('brand');
        $laptop->name = request('name');
        $laptop->memory = request('memory');
        $laptop->price = request('price');
        $laptop->save();
        return redirect('/laptops');
    }

    public function destroy(Laptop $laptop) {
        // Laptop::findOrFail($id)->delete();
        $laptop->delete();
        return redirect('/laptops');
    }

    public function show(Laptop $laptop) {
        // $laptop = Laptop::findOrFail($id);
        // return view('laptops.show', ['laptop' => $laptop]);
        return view('laptops.show', compact('laptop'));
    }
}
