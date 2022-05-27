<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController
{
    public function admin_page() {
        $categories = DB::table('categories')->get();
        $categories_count = DB::table('categories')->count();

        $products = DB::table('products')->get();
        $products_count = DB::table('products')->count();

        return view('admin', [
            "categories_count" => $categories_count,
            "categories" => $categories,
            "products" => $products,
            "products_count" => $products_count
        ]);
    }

    public function add_product_page() {
        $categories = DB::table('categories')->get();

        return view('add-product', [
            "categories" => $categories
        ]);
    }

    public function add_product(Request $request) {
        $image_name = time() ."_". rand() .".". $request->file("image")->extension();
        $request->file("image")->move(public_path("assets/images/"), $image_name);
        $path = "images/before/". $image_name;

        DB::table('products')->insert([
            "name" => $request->input("name"),
            "author" => $request->input("author"),
            "price" => $request->input("price"),
            "image" => $path,
            "category_id" => $request->input("category_id")
        ]);

        return redirect("/admin")->withErrors("Товар добавлен", "message");
    }

    public function category_delete(Request $request) {
        DB::table('categories')->where('id', $request->input('category_id'))->delete();

        return redirect("/admin")->withErrors("Категория удалена", "message");
    }
}
