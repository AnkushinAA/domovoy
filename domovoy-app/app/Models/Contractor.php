<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'count_orders',
        'count_orders_finish',
        'estimate',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
            'count_orders' => 'integer',
            'count_orders_finish'=>'integer',
            'estimate'=>'integer',
        ];
    }
}
