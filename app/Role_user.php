<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    //

    protected $table ="role_user";

    protected $fillable = ['role_id','user_id'];

    public function User(){
        return $this -> belongsTo(Role_user::class);
    }
}
