<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'rg',
        'matricula',
        'cargo',
        'escola_sede_id',
        'admin',
        'user',
        'email',
        'password',
        'observacao',
        'status',
        'cpf',
        'mudou_senha',
        'senha',
        'data_nascimento'
    ];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];
// public $preventAttrSet = true;
    public function escolas(){
        return $this->belongsToMany(Escola::class);

    }
}


    // public function sendPasswordResetNotification($token) {
    //     $this->notify(new ResetPassword($token));
    // }