<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
/**
 *-------------  I can say   => my model  your table is --> siteSetting
 */

protected $table="siteSetting";

/**
    ---------------To work with the tables columns ,i have to define them in the filable variable
 */

protected $fillable=[
    'slug', 'nameSetting', 'value', 'type',
];





















}
