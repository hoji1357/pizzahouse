<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //
    public function index() {
        // $pizzas = Pizza::all();  
        // $pizzas = Pizza::orderBy('created_at')->get();
        // $pizzas = Pizza::where('gender', 'male' , '')->get();
        $pizzas = Pizza::latest()->get();
      return view('pizzas.index', [
        'pizzas' => $pizzas,
       ]);
        }
      
        public function show($id) {
          $pizza = Pizza::findOrFail($id);
          return view('pizzas.show', ['pizza' => $pizza]);
        }
        
        public function create() {
          return view('pizzas.create');
        }
  
        public function store() {
          $pizza = new Pizza();
          $pizza->name = request('name');
          $pizza->type = request('type');
          $pizza->base = request('base'); 
          // 1
          $pizza->gender = request('gender');    
          // 2
          $pizza->age = request('age');
          
          $pizza->phone_number = request('phone_number');
          $pizza->toppings = request('toppings'); 
          $pizza->save();    
          return redirect('/')->with('mssg', 'Thanks for your order!');    
        }

        public function delete($id) {
          $pizza = Pizza::findOrFail($id);
          $pizza->delete();    
          return redirect('/pizzas');      
   }
}
