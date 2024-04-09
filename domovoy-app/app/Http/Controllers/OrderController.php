<?php

namespace App\Http\Controllers;

use App\Models\Curr;
use App\Models\Order;
use App\Models\TypeOfWork;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('id', Auth::user()->id)->get();
        return view('orders.show', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = TypeOfWork::all();
        $currencies = Curr::all();
        return view('orders.order-create', compact('types', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request);
        $type=TypeOfWork::where('id', $request->type)->first();
        Order::create([
            'name'=>$request->name,
            'type_of_work_id'=>$request->type,
            'currency_id'=>$request->currency,
            'employer_id'=>Auth::user()->id,
            'published_at'=>Carbon::now(),
            'start_at'=>$request->date,
            'finish_at'=>$request->date_end,

        ]);
        return redirect('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
