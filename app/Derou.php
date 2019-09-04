<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Derou extends Model
{
    use Translatable;
    protected $translatable = [
    	'name1', 'name2', 'name3', 'titre', 'about',
    ];
}
