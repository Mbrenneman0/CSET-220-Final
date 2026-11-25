<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * @property int $user_id
 * @property int $role_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property string $DOB
 * @property int $is_approved
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserId($value)
 * @mixin \Eloquent
 */
// #[Fillable(['name', 'email', 'password'])]
// #[Hidden(['password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token'])]
// class User extends Authenticatable implements MustVerifyEmail
// {
//     /** @use HasFactory<UserFactory> */
//     use HasFactory, Notifiable;

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const USER_ID = 'user_id';
    public const FIRST_NAME = 'first_name';
    public const LAST_NAME = 'last_name';
    public const EMAIL = 'email';
    public const PASSWORD = 'password';
    public const ROLE_ID = 'role_id';
    public const PHONE_NUMBER = 'phone_number';
    public const IS_APPROVED = 'is_approved';
    public const DOB = 'dob';

    protected $table = 'users';

    protected $primaryKey = self::USER_ID;

    protected $fillable = [
        self::ROLE_ID,
        self::FIRST_NAME,
        self::LAST_NAME,
        self::EMAIL,
        self::PHONE_NUMBER,
        self::PASSWORD,
        self::DOB,
    ];

    protected $hidden = [
        self::PASSWORD,
    ];

    protected $casts = [
        self::DOB => 'date',
        self::IS_APPROVED => 'boolean',
        self::PASSWORD => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, Role::ROLE_ID, self::ROLE_ID);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class, Patient::PATIENT_ID, self::USER_ID);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, Employee::EMPLOYEE_ID, self::USER_ID);
    }
}
