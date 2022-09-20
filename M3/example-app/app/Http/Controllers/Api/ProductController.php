<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::all();
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = [
            'name'          => 'required|min:3|unique:products',
            'price'         => 'required',
            'description'   => 'required',
        ];
        $messages = [
            'min' => 'Bat buoc lon hon',
            'name.required' => 'Ban chua nhap ten',
            'price.required' => 'Ban chua nhap gia',
        ];
        // $request->validate($roles,$messages);//that bai => create
        $validator = Validator::make( $request->all(),$roles,$messages);

        // Neu that bai
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        try {
            $product->save();
            return response()->json($product);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $return = [
                'status' => 0,
                'msg' => $msg
            ];
            return response()->json($return);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Product::find($id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        try {
            $product->save();
            return response()->json($product);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $return = [
                'status' => 0,
                'msg' => $msg
            ];
            return response()->json($return);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        try {
            $product->delete();
            $return = [
                'status' => 1,
                'msg' => 'Xoa thanh cong'
            ];
            return response()->json($return);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            $return = [
                'status' => 0,
                'msg' => $msg
            ];
            return response()->json($return);
        }
    }
}
