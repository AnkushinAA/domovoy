<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employer=Employer::where('user_id', Auth::user()->id)->first();
        if(!$employer){
                Employer::create([
                    'user_id'=>Auth::user()->id,
                    'count_orders'=>0,
                    'count_orders_finish'=>0,
                    'estimate'=>5,
                ]);
        }
        $contractors=DB::table('contractors')
            ->join('users', 'users.id', '=', 'contractors.user_id')
            ->select('contractors.*','users.name','users.id' )
            ->get();
        return view('employers/employer', compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contractor $contractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contractor $contractor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contractor $contractor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contractor $contractor)
    {
        //
    }
}
