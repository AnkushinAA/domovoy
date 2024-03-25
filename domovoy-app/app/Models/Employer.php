<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'count_orders',
        'count_orders_finish',
        'estimate',
    ];

    protected function casts(): array
    {
        return [
            'ser_id' => 'integer',
            'count_orders' => 'integer',
            'count_orders_finish'=>'integer',
            'employer_id'=>'integer',
        ];
    }
}
