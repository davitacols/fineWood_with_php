<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;


class AdminController extends Controller
{
    public function category()
    {
        $category = category::all();
        return view('admin.category', compact('category'));
    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }


    public function add_category(Request $request)
    {
        $category = new category;
        $category->category_name = $request->category;
        $category->save();
        return redirect()->back()->with('message', 'Category Added Successfully');

    }

    public function view_product()
    {
        $category = category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $request->validate([
            'created_at' => 'required|date_format:H:i', // Validates 24-hour format (HH:MM)
            'updated_at' => 'required|date_format:Y-m-d', // Validates date in YYYY-MM-DD format
            'product_name' => 'required|string',
            'product_price' => 'required|numeric',
            'category' => 'required|string',
            'shipping_type' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inventory' => 'required|integer',
            'sku' => 'required|string',
        ]);

        
        // Store main image as base64 string
        $mainImage = $request->file('main_image');
        $mainImagePath = $mainImage->store('public_images', 'public');
        
        // Save other images to public_images folder and store their paths in an array
        $otherImagePaths = [];
        if ($request->hasFile('other_images')) {
            foreach ($request->file('other_images') as $otherImage) {
                $otherImagePath = $otherImage->store('public_images', 'public');
                $otherImagePaths[] = $otherImagePath;
            }
        }
    
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->category = $request->input('category');
        $product->shipping_type = $request->input('shipping_type');
        $product->date_created = $request->input('date_created');
        $product->time_created = $request->input('time_created');
        $product->date_updated = $request->input('date_updated');
        $product->inventory = $request->input('inventory');
        $product->sku = $request->input('sku');
        $product->main_image = $mainImagePath; // Save main image path
        $product->other_images = json_encode($otherImagePaths); // Save other image paths as JSON
    
    
        $product->save();
    
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

}