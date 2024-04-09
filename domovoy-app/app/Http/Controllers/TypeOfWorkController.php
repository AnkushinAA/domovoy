<?php

namespace App\Http\Controllers;

use App\Models\TypeOfWork;
use App\Models\Unit;
use App\Models\Curr;
use Illuminate\Http\Request;

class TypeOfWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Curr::create([
            'name'=>'рубль',
            'symbol'=>'руб.',
        ]);
        Unit::create([
            'name'=>'м. кв.',
            'description'=>'метр квадратный'
        ]);
        Unit::create([
            'name'=>'м. пог.',
            'description'=>'метр погонный'
        ]);
        Unit::create([
            'name'=>'м. куб.',
            'description'=>'метр кубический'
        ]);
        Unit::create([
            'name'=>'шт.',
            'description'=>'штуки'
        ]);
        $types=array(
            ['name'=>'кладка кирпича3', 'price'=>2000, 'currency_id'=>1, 'unit_id'=>3],
            ['name'=>'кладка кирпича2', 'price'=>1000, 'currency_id'=>1, 'unit_id'=>1],
            ['name'=>'бетонные работы', 'price'=>3000, 'currency_id'=>1, 'unit_id'=>3],
        );
        foreach($types as $type){
            TypeOfWork::create([
                'name'=>$type['name'],
                'price'=>$type['price'],
                'currency_id'=>$type['currency_id'],
                'unit_id'=>$type['unit_id'],
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function show(TypeOfWork $typeOfWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeOfWork $typeOfWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeOfWork $typeOfWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeOfWork $typeOfWork)
    {
        //
    }
}
