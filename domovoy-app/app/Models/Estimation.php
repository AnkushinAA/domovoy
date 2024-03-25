<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_appraiser_id',
      'user_of_estimation_id',
      'estimate',
      'discription',
    ];

    protected function cast():array
    {
        return [
            'user_appraiser_id'=>'integer',
            'user_of_estimation_id'=>'integer',
            'estimate'=>'integer',
        ];
    }
}
