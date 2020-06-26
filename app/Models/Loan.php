<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'client','quantity','pays','share','total_to_pay','date_mini','date_expiration',
    ];
}
