<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casetype extends Model
{
    //
    protected $table = "casetype";
     protected $fillable = [
	'id', 'case_type'
	];		
}
