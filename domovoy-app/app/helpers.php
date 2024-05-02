<?php

use App\Models\TypeOfWork;
use App\Models\Curr;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $inputs=array(
            ['name'=>'Алексей','email'=>'r141d@mail.ru','phonefield'=>'+79091016633','role'=> 'Заказчик','password' =>'12345678',],
            ['name'=>'Константин','email'=>'a@mail.ru','phonefield'=>'+79000000000','role'=> 'Подрядчик','password' =>'12345678',],
            ['name'=>'Петр','email'=>'b@mail.ru','phonefield'=>'+79000000001','role'=> 'Подрядчик','password' =>'12345678',]
        );
        foreach($inputs as $input){
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phonefield'=>$input['phonefield'],
            'role'=> $input['role'],
            'password' => Hash::make($input['password'])
        ]);}
    }
}
