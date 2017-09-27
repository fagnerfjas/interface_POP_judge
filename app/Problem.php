<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'problem';
    protected $connection = 'mysql_judge';
    public $timestamps = false;
}
