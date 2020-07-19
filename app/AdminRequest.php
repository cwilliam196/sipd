<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRequest extends Model
{
  protected $table = 'request';
  protected $primaryKey = 'id_request';
}
