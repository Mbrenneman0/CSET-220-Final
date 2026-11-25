<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $employee_id
 * @property numeric $salary
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const EMPLOYEE_ID = 'employee_id';
    public const SALARY = 'salary';

    protected $table = 'employees';
    protected $primaryKey = self::EMPLOYEE_ID;

    public $incrementing = false;

    protected $fillable = [
        self::SALARY
    ];

    protected function casts(): array
    {
        return [
            self::SALARY => 'decimal:2',
        ];
    }

    public function doctorRosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::DOCTOR_ID,
            self::EMPLOYEE_ID
        );
    }

    public function supervisorRosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::SUPERVISOR_ID,
            self::EMPLOYEE_ID
        );
    }

    public function caregiver1Rosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::CAREGIVER_1,
            self::EMPLOYEE_ID
        );
    }

    public function caregiver2Rosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::CAREGIVER_2,
            self::EMPLOYEE_ID
        );
    }

    public function caregiver3Rosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::CAREGIVER_3,
            self::EMPLOYEE_ID
        );
    }

    public function caregiver4Rosters(): HasMany
    {
        return $this->hasMany(
            Roster::class,
            Roster::CAREGIVER_4,
            self::EMPLOYEE_ID
        );
    }
    public function care_groups()
    {
        return $this->hasMany(
            Care_Group::class,
            Care_Group::CAREGIVER_ID,
            self::EMPLOYEE_ID
        );
    }
}
