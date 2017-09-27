<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $connection = 'mysql_judge';
    protected $table = 'LANGUAGE';
    public $timestamps = false;
}
