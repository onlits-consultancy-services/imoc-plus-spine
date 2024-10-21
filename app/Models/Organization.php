<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $primaryKey = 'oid';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generateOid(): string
    {
        return '0' . date('Ymdhis');
    }
}
