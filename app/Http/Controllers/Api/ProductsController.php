<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Info(
     *     version="1.0.0",
     *     title=" This is an API developeded for Althaia",
     *     termsOfService="http://www.althaia.com.br/",
     *     @OA\Contact(
     *         email="juracabral@yahoo.com.br"
     *     ),
     * )
     */
   /**
     * @OA\Post(
     *      path="/auth/login",
     *      description="System Authentication",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     */
   /**
     * @OA\Post(
     *      path="/auth/logout",
     *      description="Exit the System",
     *      @OA\Response(
     *          response=200,
     *          description="successful logged"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     *     )
     */

    /**
     * @OA\Get(
     *      path="/api/products",
     *      description="Returns list of products",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     *     )
     *
     * Returns list of products
     */
    public function index(Request $request)
    {
        $products = Product::all();
      //$products = Product::latest()->paginate(25);

        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Post(
     *     path="/api/products",
     *     description="Create a new Product",
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     @OA\Parameter(
     *         name="id",
     *         in="header",
     *         required=true,
     *         @OA\Schema(
     *             type="int"
     *         )
     *     ),     
     *     @OA\Parameter(
     *         name="password",
     *         in="header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     )
     *     ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     * )
     */    
    public function store(Request $request)
    {
        
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *     path="/api/products/{id}",
     *     description="Return a product",
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     * )
     */        
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return $product;
    }

    /**
     * @OA\Put(
     *     path="/api/products/{id}",
     *     description="Edit a Product",
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *     @OA\Parameter(
     *         name="email",
     *         in="header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),     
     *     @OA\Parameter(
     *         name="password",
     *         in="header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     )
     *     ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     * )
     */    
    public function update(Request $request, $id)
    {
        
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/products/{id}",
     *     description="Delete a product",     
     *     @OA\Response(
     *         response=204,
     *         description="OK",
     *     ),
     *       @OA\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }    
     * )
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return response()->json(null, 204);
    }
}
