<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    
    protected $primaryKey = 'lid';
    public $incrementing = false;
    protected $keyType = 'string';
}
