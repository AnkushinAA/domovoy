<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

  /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type_of_work_id',
        'currency_id',
        'employer_id',
        'contractor_id'
        'published_at',
        'start_at',
        'finish_at',
        'finished_at',
    ];

       /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'order_photo_url',
    ];

    protected function casts(): array
    {
        return [
            'published_at'=> 'datetime',
            'start_at'=> 'datetime',
            'finish_at'=> 'datetime',
            'finished_at' => 'datetime',
            'type_of_work_id'=>'integer',
            'currency_id'=>'integer',
            'employer_id'=>'integer',
            'contractor_id'=>'integer',

        ];
    }
}
