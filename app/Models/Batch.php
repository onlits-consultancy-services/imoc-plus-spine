<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $primaryKey = 'batch_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
