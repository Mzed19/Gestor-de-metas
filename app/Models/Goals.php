<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
   

    public  $fillable = [
        'ID',
        'store_id',
        'name',
        'value',
    ];
}
