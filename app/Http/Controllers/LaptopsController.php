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
            'price' => 'required'
        ]);
        Laptop::create(request(['brand', 'name', 'memory', 'price']));
        return redirect('/laptops');
    }

    public function edit(Laptop $laptop) {
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Laptop $laptop) {
        $laptop->update(request(['brand', 'name', 'memory', 'price']));
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
