<?php

namespace mine_apple;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    protected $table = 'cep';
    protected $guarded = ['id'];
    public $timestamps = false;
}
