<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;

use App\Product;
use App\Size;
use App\User;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $allProducts = Product::all()->count();
      $products = Product::orderBy('name')->paginate(20);
      return view('products.index')->with(compact('allProducts', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $product = Product::all();
      $sizes = Size::all();
  		$users = User::all();

      return view('products.form')->with(compact('sizes', 'users', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $product = new Product;

        self::storeOrUpdate($product, $request);

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::findOrFail($id);

      return view('products.show')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::findOrFail($id);
  		$sizes = Size::all();
  		$users = User::all();

  		return view('products.editForm')->with( compact('product', 'sizes', 'users') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
      $product = Product::find($id);

      self::storeOrUpdate($product, $request);

      return redirect('/products')->with('edited', "Movie editada: $product->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('deleted', 'Producto Eliminado');
      } catch (\Exception $e) {
        return redirect('/products/'.$id)->with('errorDeleted', 'No se pudo eliminar');
      }
    }
    public function storeOrUpdate($product, $request)
  	{
  		$product->name = $request->name;
  		$product->description = $request->description;
  		$product->price = $request->price;
  		$product->stock = $request->stock;
  		$product->size_id = $request->size_id;
  		$product->user_id = $request->user_id;


  		// Necesito el archivo en una variable esta vez
  		$file = $request->file("img1");

  		// Nombre final de la imagen
  		$finalName = strtolower(str_replace(" ", "_", $request->input("name")));

  		// Armo un nombre único para este archivo
  		$name = $finalName . uniqid('_image_') . "." . $file->extension();

  		// Guardo el archivo en la carpeta
  		$file->storePubliclyAs("public/products/images", $name);

  		// Guardo en base de datos el nombre de la imagen
  		$product->img1 = $name;
  		$product->save();
  	}
}
