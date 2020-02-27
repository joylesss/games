<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\DataTablePaginate;

class Requests extends Model
{
    use DataTablePaginate;

    //
    protected $fillable = [
        'id', 'app_id', 'details', 'a', 'b', 'c', 'd', 'answer',
    ];

    //
    protected $hidden   = [];
}
