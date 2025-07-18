<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function ProdCreate(){
        return view('AddProd');
    }
    public function ProdStore( Request $request){
        // dd($request->all());
          $Image =  time(). '.'.$request->image->extension(); //image name store
          $request->image->move(public_path('images'),$Image); //move
        
          $prod = new Product();//object
          $prod->image = $Image;
          $prod->name = $request->name;
          $prod->description = $request->description;
          $prod->price = $request->price;
          $prod->save();
          
          return redirect()->route('prodView');
    }

    public function ProdView(){
        $products = Product::all(); //table all fileds
        return view('ViewProd',compact('products')); //assoc array
    }

    public function ProdEdit($id){ //2
       $products =  Product::where('id',$id)->first(); //2
       return view('EditProd',compact('products'));
    }
}
