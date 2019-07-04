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

        request()->validate([
            'brand' => ['required', 'min:2'],
            'name' => ['required', 'min:2'],
            'memory' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);
        
        $laptop = new Laptop();
        $laptop->brand = request('brand');
        $laptop->name = request('name');
        $laptop->memory = request('memory');
        $laptop->price = request('price');
        $laptop->category = request('category');
        $laptop->blnactive = request()->has('blnactive');
        $laptop->save();

        return redirect('/laptops');
    }

    public function edit(Laptop $laptop) {
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Laptop $laptop) {
        $laptop->update(request(['brand', 'name', 'price', 'memory', 'category']));
        // blnactive has to be handled separately, because it is not part of the request
        // when set to false
        $laptop->blnactive = request()->has('blnactive');
        $laptop->save();
        return redirect('/laptops');
    }

    public function destroy(Laptop $laptop) {
        $laptop->delete();
        return redirect('/laptops');
    }

    public function show(Laptop $laptop) {
        return view('laptops.show', compact('laptop'));
    }
}
