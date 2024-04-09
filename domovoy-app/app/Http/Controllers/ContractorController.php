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
        $contractors=DB::table('contractors')
            ->join('users', 'contractors.user_id', '=', 'users.id',  )
            ->select('contractors.*','users.name',)
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

        $user=User::where('id', ($contractor->user_id))->first();
        return view('employers/show_contractor', compact('contractor', 'user'));
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
