<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function hasRole($role){
        return null !== $this->roles()->where('name', $role)->first();

    }

    public function hasAnyRole($roles){
        return null !== $this->roles()->whereIn('name', $roles)->first();

    }

    // $user->authoriseRoles('admin');
    // $user->authoriseRoles(['admin', 'editor']);

    public function authoriseRoles($roles){

        if(is_array($roles)){
            return $this->hasAnyRole($roles) || abort(403, "This action is unauthorised.");
        }

        return $this->hasRole($roles) || abort(403, "This action is unauthorised.");

    }

    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }
}
