<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function bookings()
    {
        return $this->hasMany(Bookings::class, 'customer_id');
    }
    public function photography_sessions()
    {
        return $this->hasMany(Photography_sessions::class, 'customer_id');
    }
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'updated_at',
        'created_at',
        'status_aktif',
    ];
    protected $table = 'customers';
    protected $primaryKey = 'id';
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
