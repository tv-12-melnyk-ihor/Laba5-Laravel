<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\NewModel;

class NewController extends Controller
{
    public function isworking(){
        return 'Controller is working! :D';
    }

    public function add($num1, $num2)
    {
        $result = $num1 + $num2;
        return View::make('result', ['result' => $result]);
    }

    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;
        return View::make('result', ['result' => $result]);
    }

    public function multiply(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 * $num2;
        return view('result', ['result' => $result]);
    }

    public function divide(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $result = $num1 / $num2;
        return view('result', ['result' => $result]);
    }



    public function create(Request $request)
    {
        $product = NewModel::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('products.index');
    }

    public function createproduct()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $product = NewModel::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('products.index');
    }

    public function index()
    {
        $products = NewModel::all();
        return view('model', ['products' => $products]);
    }
}
