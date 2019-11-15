<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
     //Table Name
     protected $table   = 'bill_list';
     //Primary Key
     public $primaryKey = 'id';
 
     //timestamp
     public $timestamps = true;
}
