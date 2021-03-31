<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Webpatser\Uuid\Uuid;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $connection = 'mysql2';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*    protected $fillable = [
        'name',
        'email',
        'password',
    ]; */

    protected $fillable=['name', 'email','cpf','password','active'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    protected $keyType = 'string';

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string) Uuid::generate(4);
        });
    }


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function detail(){
        return $this->hasOne('App\Models\Detail', 'id');
    }


    public function oms()
    {
        return $this->hasManyThrough(
            'App\Models\Om',
            'App\Models\Detail',
            'om_id',
            'id',
        );
    }

    public function sections()
    {
        return $this->hasManyThrough(
            'App\Models\Section',
            'App\Models\Detail',
            'section_id',
            'id',
        );
    }

    public function permissions()
    {
        return $this->hasManyThrough(
            'App\Models\Permission',
            'App\Models\Roler',
            'user_id',
            'roler_id'

        );
    }

    public function rolers()
    {
        return $this->BelongsToMany('App\Models\Roler', 'roler_user', 'user_id', 'roler_id')->withPivot('user_id', 'roler_id');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public static function search($query)
    {
        return empty($query) 
        ? static::where('name', '!=', 't') 
        : static::where('name', '!=', 't')->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%')->orWhere('email', 'LIKE', '%' . $query . '%');
            });
    }
}
