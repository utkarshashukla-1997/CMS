<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = Order::orderBy('id', 'DESC')->get();
        return view('Backend.Order.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::all();
        $product = Product::all();
        return view('Backend.Order.create',compact('order','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'order_no' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'customer_country' => 'required',
             'product' => 'required',
             'ordered_date' => 'required',
             'status' => 'required',
             'amount' => 'required'

        ]);
        $input = $request->all();
        $input['product'] = $input['product'][0];
        $order = Order::create($input);
        $order->prod()->sync($request->product);
        return redirect()->route('order.index')
            ->with('success', 'New Order Created Successfully !!!', compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('Backend.Order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrfail($id);
        $product = Product::all();
        return view('Backend.Order.edit',compact('order','product'));
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
        $this->validate($request, [
            'order_no' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_address' => 'required',
            'customer_country' => 'required',
             'product' => 'required',
             'ordered_date' => 'required',
             'status' => 'required',
             'amount' => 'required'

        ]);

        $input = $request->all();
        $order = Order::find($id);
        $order->update($input);
        $order->prod()->sync($request->product);
        return redirect()->route('order.index')
            ->with('success', 'Selected Order Details Updated Successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id)->delete();
        return redirect()->route('order.index')->with('success','Selected Order Deleted Successfully!!!',compact('order'));
    }
}
