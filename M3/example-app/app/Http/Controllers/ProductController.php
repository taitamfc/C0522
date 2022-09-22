<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;  


use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $order = Order::with('products')->find(1);
        // dd($order->toArray());


        // $category = Category::with('products')->find(1);
        // return response()->json($category);
        // dd($category->toArray());

        // $items = DB::table('products')->pluck('name', 'price')->toArray();
        $items = Product::all();

        // $items = $items->reject(function ($item) {
        //     return $item->id == 1;
        // });

        foreach( $items as $item ){
            echo $item->category->name;
        }

        //

        
        // dd($items);
        $params = [
            'items' => $items
        ];
        return view('products.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user_name = 'Admin';
        // $params = [
        //     'user_name' => $user_name
        // ];
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        // $roles = [
        //     'name'          => 'required|min:3|unique:products',
        //     'price'         => 'required',
        //     'description'   => 'required',
        // ];
        // $messages = [
        //     'min' => 'Bat buoc lon hon',
        //     'name.required' => 'Ban chua nhap ten',
        //     'price.required' => 'Ban chua nhap gia',
        // ];
        // // $request->validate($roles,$messages);//that bai => create
        // $validator = Validator::make( $request->all(),$roles,$messages);

        // // Neu that bai
        // if ($validator->fails()) {
        //     return redirect()->route('products.create')
        //             ->withErrors($validator) //kem theo loi
        //             ->withInput()//kem gia tri cu
        //             ;
        // }

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        // $product->category_id = $request->category_id;

        try {
            $product->save();
            return redirect()->route('products.index')->with('success',__('messages.msg_ok'));
        } catch (\Exception $e) {
            Log::error( $e->getMessage() );
            return redirect()->route('products.index')->with('error',__('messages.msg_error'));
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
        //dung DB truy van vao products voi dieu kien id = 1
        // $item = DB::table('products')->where('id','=',1)->first();
        try {
            $item = Product::findOrFail(5);
        } catch (ModelNotFoundException  $exception) {
            return redirect()->route('products.index')->withError('Khong tim thay')->withInput();
        }
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request = new Request();
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        
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
        if($product){
            $product->delete();
        }else{

        }

    }
}
