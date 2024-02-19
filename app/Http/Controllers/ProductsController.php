<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index(){
        $page_title='Project Management';
        $products = Product::latest()->limit(3)->get();
        return view('home',compact('page_title','products'));
        
    }
    
    public function getProducts(){
        $page_title='Products List';
        $products = Product::latest()->get();
        return view('products.productsList',compact('page_title','products'));
        
    }
    public function addProduct(Request $request){
        $page_title='Add Product';    
        return view('products.productAdd',compact('page_title'));
        
    }
    public function editProducts(Request $request){
        $page_title='Edit Product';
        $products = Product::where('id',$request->id)->first();
        return view('products.productEdit',compact('page_title','products'));
        
    }
    
    public function submitProduct(Request $request){
        $page_title='Products List';
        $products = new Product;
       
        $products->name = $request->name;
        $products->description = $request->description; 
        $products->price =  $request->price; 
        $products->stockQuantity =  $request->stockQuantity;
        $products->userId = '1'; 
        $result = $products->save();
        if($result){
            return back()->with('success','Added Successfully');
        }else{
            return back()->with('error','Something Went Wrong ! ');
        }
    }
    
    public function updateProduct(Request $request,$id){
        $page_title='Products List';
        $products = Product::where('id',$id)->first();
        //  print_r($request->all());exit;
        // dd($products);
        $products->name = $request->productName;
        $products->description = $request->description; 
        $products->price =  $request->price; 
        $products->stockQuantity =  $request->stockQuantity; 
        $result = $products->save();
        if($result){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Something Went Wrong ! ');
        }
      
        
    }
    
    public function deleteProduct(Request $request,$id){
        $result = Product::where('id',$id)->delete();
        if($result){
            return back()->with('info','Deleted Successfully');
        }else{
            return back()->with('error','Something Went Wrong ! ');
        }
    }

}
