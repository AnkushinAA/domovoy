<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Curr;
use App\Models\Order;
use App\Models\TypeOfWork;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=DB::table('orders')
            ->join('type_of_works', 'orders.type_of_work_id', '=', 'type_of_works.id')
            ->join('currs','orders.currency_id','=','currs.id')
            ->select('orders.*','type_of_works.name','type_of_works.price','type_of_works.description', 'currs.symbol')
            ->orderBy('published_at')
            ->having('employer_id','=', Auth::user()->id)
            ->get();
        $contractors=Contractor::all();
        return view('orders.show', compact('orders', 'contractors'));
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
        $validate = $request->validate([
            'name'=>'required|string|max:255',
            'image'=>'mimes:jpeg,jpg',
            'date'=>'required|date|after_or_equal:today',
            'date_end'=>'required|date|after:tomorrow',
            'currency'=>'string',
        ]);

        // $path= $request->file('image')->store('orders');
        $path = Storage::disk('public')->putFile('orders', $request->file('image'));
        $type=TypeOfWork::where('id', $request->type)->first();
        Order::create([
            'name'=>$validate['name'],
            'type_of_work_id'=>$type->id,
            'currency_id'=>$validate['currency'],
            'employer_id'=>Auth::user()->id,
            'published_at'=>Carbon::now(),
            'start_at'=>$validate['date'],
            'finish_at'=>$validate['date_end'],
            'order_photo_url'=>$path,
        ]);
        return redirect('orders');
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
