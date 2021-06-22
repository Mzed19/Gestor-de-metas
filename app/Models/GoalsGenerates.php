<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Nullable;

class GoalsGenerates extends Model
{

    public  $fillable = [
        'ID',
        'user_id',
        'goal_id',
        'value',
    ];
}
