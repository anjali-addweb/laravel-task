<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
	 protected $table="employee";
    public $timestamps=false;
    protected $fillable = [
        'name','contact_no', 'email','image',
    ];
}
