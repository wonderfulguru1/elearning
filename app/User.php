<?php

namespace App;
use DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $appends = ['is_admin','user_role'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    *
    * Get all of the courses for the user.
    *
    */

    public function courses()
    {
      return $this->belongsToMany('App\Course','course_enrolls');
    }

   

    public function getuserRoleAttribute()
    {
      return DB::table('role_user')
      ->select('roles.name')
      ->join('roles', 'roles.id', '=', 'role_user.role_id')
      ->where('user_id', $this->id)->first();
    }

      public function getisAdminAttribute()
    {
      return $this->hasRole('admin');
    }

    public function detachAllRoles()
    {
      DB::table('role_user')->where('user_id', $this->id)->delete();
      return $this;
    }
}
