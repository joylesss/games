<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\DataTablePaginate;

class Wins extends Model
{
    use DataTablePaginate;

    //
    protected $fillable = [
        'id', 'user_id', 'prize', 'play_times'
    ];

    //
    protected $hidden   = [];
}
