<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ic_no'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    //buat function relationship kepada inventory
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    // $user->gender
    public function getGenderAttribute()
    {
        $ic_no = $this->ic_no;

        // Check the 11th digit of the IC number
        if (isset($ic_no[11])) {
            return $ic_no[11] % 2 === 0 ? 'Female' : 'Male';
        }

        return 'Unknown';
    }

    // get age from ic_no, the first two is the year, example 80 is 1980
    public function getAgeAttribute()
    {
        $ic_no = $this->ic_no;

        if (isset($ic_no[0]) && isset($ic_no[1])) {
            $year = (int)substr($ic_no, 0, 2);
            $currentYear = (int)date('y');

            // Determine the full year (1900s or 2000s)
            $fullYear = $year <= $currentYear ? 2000 + $year : 1900 + $year;

            return date('Y') - $fullYear;
        }

        return null; // Return null if IC number is not valid
    }
}
