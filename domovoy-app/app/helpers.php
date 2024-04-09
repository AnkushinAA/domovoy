<?php

use App\Models\TypeOfWork;
use App\Models\Curr;
use App\Models\Unit;

if(!function_exists('dataOrders')){
    function dataOrders(){
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
}
