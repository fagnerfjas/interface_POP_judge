<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $connection = 'mysql_judge';

    protected $table = 'submission';
}
