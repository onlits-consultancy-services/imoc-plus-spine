<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $primaryKey = 'account_no';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generateAccountNo(): string
    {
        return '1' . date('Ymdhis');
    }
}
