<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        //下記課題14(5)で追記
    'name' => 'required',
    'gender' => 'required',
    'hobby' => 'required',
    'introduction' => 'required',
    );
}
