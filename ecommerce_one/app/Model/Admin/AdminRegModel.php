<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminRegModel extends Model
{
   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','phone_no','present_address','permanent_address','admin_access_level','admin_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
}
