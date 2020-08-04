<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilesHistory extends Model
{
    // protected $table = 'profiles_histories';
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
