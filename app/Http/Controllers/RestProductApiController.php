<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RestProductApiController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        $html = '<table border="1">';
        $html .= '<thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Stock Quantity</th></tr></thead>';
        $html .= '<tbody>';
        foreach ($products as $product) {
            $html .= '<tr>';
            $html .= '<td>' . $product->id . '</td>';
            $html .= '<td>' . $product->name . '</td>';
            $html .= '<td>' . $product->description . '</td>';
            $html .= '<td>' . $product->price . '</td>';
            $html .= '<td>' . $product->stock_quantity . '</td>';
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';

        return response($html)
            ->header('Content-Type', 'text/html');
    }

    
    public function submitProduct(Request $request)
    {
        $requestData = $request->all(); // Use this line if you're not validating the request

        try {
            $product = Product::create($requestData);
            $response = [
                'message' => 'Product created successfully',
                'product' => $product,
                'csrf_token' => csrf_token(),
            ];
            return response()->json($response, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage()], 500);
        }
    }

    

    public function getSpecificProduct($id)
    {
        if(Product::find($id)){
            return Product::find($id);
        }else{
            return 'Sorry! no product found';
        }
        
    }

    public function updateProduct(Request $request, $id)
{
    try {
        $product = Product::findOrFail($id);

        $requestData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stockQuantity' => 'required|integer',
        ]);

        $product->update($requestData);

        return 'Product updated successfully';
    } catch (\Exception $e) {
        return response()->json(['message' => 'Something went wrong', 'error' => $e->getMessage()], 500);
    }
}


    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
