<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
  protected $table="building";
  protected $fillable=[
           'id', 'bu_name', 'bu_pirce',
          'bu_square', 'bu_type', 'bu_small_des',
          'bu_rent', 'bu_meta', 'bu_longitude',
          'bu_latitude', 'bu-large_des', 'bu_status','user_id'
  ];
}
